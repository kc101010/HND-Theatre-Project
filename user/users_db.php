<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $statement array*/
/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//include_once "../partial/header.php";
require_once "../connection/conn.php";

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//prepare a statment for our database to execute
$statement = $conn->prepare('SELECT id, username, email FROM TheatreCompanyProject.user WHERE id = ?');
//this statement selects id, username, email for the currently signed in user

//bind the session id for current user
$statement->bind_param('i', $_SESSION['id']);

//have the database execute the query
$statement->execute();

//declare variables to hold the results from the query
$statement->bind_result($id, $username, $email);

//essentially make our variables available to the program
$statement->fetch();
