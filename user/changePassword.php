<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//user should be logged in to view this page so no need to check which header should be displayed
include_once "../partial/hdr_login.php";

//call our database connection
require_once '../connection/conn.php';

//connect to our database using connection details
$connection = mysqli_connect($host, $usern, $pass, $database);


if($_POST['password'] == $_POST['user_conf_password']){

    $username = $_SESSION['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $statement = $connection->prepare('
        UPDATE user u
        set
        u.password = ?
        WHERE username = ?;');

    $statement->bind_param('ss', $password, $username);

    $statement->execute();

    $connection->close();
    echo 'Password changed successfully';

}else{
    echo 'Passwords don\'t match';
}




?>