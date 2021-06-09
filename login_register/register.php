<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//include the normal header as there should be no user logged in
include_once "../partial/header.php";

//call our database connection
require_once "../connection/conn.php";

//connect to our database using connection details
$connection = mysqli_connect($host, $usern, $pass, $database);

//prepare a statement for database to execute
$statement = $connection->prepare('SELECT id, password FROM user WHERE username = ? ');
//this username is used to check if an account already exists by checking the user inputa against the table data

/*bind the user input 'username' to sql statement, bind_param is used
to prevent sql injection by preventing attacker from altering the sql statement*/
$statement->bind_param('s', $_POST['username']);

//have the database execute the query
$statement->execute();

//store the query results
$statement->store_result();

//if the password and confirm password match, proceed with registration
if($_POST['password'] == $_POST['user_conf_password']) {
    //check if the account already exists
    if ($statement->num_rows > 0) { //check that account doesn't already exist, which is the case if there are any results from the database
        echo 'Account already exists.';
    } else { //if passwords match and the account doesn't exist, proceed
        //close the previou statement
        $statement->close();

        //declare a new statement to create a new user
        $statement = $connection->prepare("INSERT INTO user (username, email, password) VALUES(?, ?, ?);");

        //hash the password before storage
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //bind the username, email and hashed password to store on the table
        $statement->bind_param('sss', $_POST['username'], $_POST['email'], $password);

        //execute the query
        $statement->execute();

        //close the connection for security reasons
        $connection->close();
        echo 'Account created successfully';
    }

}else{ //passwords don't match so user should attempt again
    echo 'passwords do not match';
}

?>