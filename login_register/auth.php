<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//call generic header as user is not logged in at this point
include_once "../partial/header.php";

//call our database connection
require_once '../connection/conn.php';

//connect to our database using connection details
$connection = mysqli_connect($host, $usern, $pass, $database);

//if no username or password is entered then display an error to the user
if (!isset($_POST['username'], $_POST['password'])){ exit('Please fill both username & password field!');}

//if the statement can be prepared then do so and run through the following if statement
if($statement = $connection->prepare('SELECT id, password, is_admin, email, is_active FROM TheatreCompanyProject.user WHERE (username = ?) OR (email = ?)')){
//this statement selects all the users details if the username or email match the parameters set when trying to log in

    //this binds the username parameteer twice as whatever text is entered must be checked as both the username and email
    $statement->bind_param('ss', $_POST['username'], $_POST['username']);

    //execute the statement
    $statement->execute();

    //store the results of the statement
    $statement->store_result();

    //if the query returns results then run through this if statement
    if($statement->num_rows > 0){
        $statement->bind_result($id, $password, $admin, $email, $active);
        $statement->fetch();

        if($active) {//if the account is active then procede with the next statement

            if (password_verify($_POST['password'], $password)) {//if the password attempt matches the stored password (when hashed), continue
                session_regenerate_id(); //create a new id for the session

                $_SESSION['loggedin'] = TRUE; //the user is now logged on
                $_SESSION['name'] = $_POST['username']; //the username is stored
                $_SESSION['id'] = $id; //the user id is stored
                $_SESSION['is_admin'] = $admin; //whether the current user account is an admin is stored
                $_SESSION['mail'] = $email;//user email is stored

                //set cookie username to store variable username for 24 hours
                setcookie("username", $_POST['username'], time() + 86400, "/");

                if ($admin == 1) { //if the user is an admin, redirect to the admin profile page
                    header('Location: ../admin/admin.php');
                } else {    //if the user is not an admin redirect to the user profile page
                    header('Location: ../user/user.php');
                }


            } else {//if this is run then the account exists but the password was incorrect
                echo 'Incorrect Password!';
            }
        }else{//if this is run then the account hasn't been activated by an admin
            echo 'This account is not activated';
        }

    }else{//if this is ran then there was no matching username/email in the database
        echo 'Incorrect Username/Email!';
    }

}else{ //if this is ran then there was a database error and the statement didnt work
    echo 'Could not prepare statement!';
}

