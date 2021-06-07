<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

include_once "../partial/header.php";
require_once '../connection/conn.php';
$connection = mysqli_connect($host, $usern, $pass, $database);

//echo password_hash($_POST['password'],PASSWORD_DEFAULT);

if (!isset($_POST['username'], $_POST['password'])){ exit('Please fill both username & password field!');}

if($statement = $connection->prepare('SELECT id, password, is_admin, email, is_active FROM TheatreCompanyProject.user WHERE (username = ?) OR (email = ?)')){

    $statement->bind_param('ss', $_POST['username'], $_POST['username']);
    $statement->execute();

    $statement->store_result();

    if($statement->num_rows > 0){
        $statement->bind_result($id, $password, $admin, $email, $active);
        $statement->fetch();

        if($active) {

            if (password_verify($_POST['password'], $password)) {
                session_regenerate_id();

                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;
                $_SESSION['is_admin'] = $admin;
                $_SESSION['mail'] = $email;

                if ($admin == 1) {
                    header('Location: ../admin/admin.php');
                } else {
                    header('Location: ../user/user.php');
                }


            } else {
                echo 'Incorrect Password!';
            }
        }else{
            echo 'This account is not activated';
        }

    }else{
        echo 'Incorrect Username/Email!';
    }

}else{
    echo 'Could not prepare statement!';
}

