<?php

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

include_once "../partial/header.php";
require_once "../connection/conn.php";

$connection = mysqli_connect($host, $usern, $pass, $database);

$statement = $connection->prepare('SELECT id, password FROM user WHERE username = ? ');


$statement->bind_param('s', $_POST['username']);
$statement->execute();
$statement->store_result();

//check if the account already exists
if($statement->num_rows > 0){
    echo 'Account already exists.';
}else{
    //if the account doesn't already exist, create a new statement which will add a new user
    $statement->close();
    $statement = $connection->prepare("INSERT INTO user (username, email, password) VALUES(?, ?, ?);");

    //hash password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $statement->bind_param('sss', $_POST['username'], $_POST['email'], $password);
    $statement->execute();

    $connection->close();
    echo 'Account created successfully';
}


?>