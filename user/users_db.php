<?php
/** @var $statement array*/
/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//include_once "../partial/header.php";
require_once "../connection/conn.php";

$conn = mysqli_connect($host, $usern, $pass, $database);

$statement = $conn->prepare('SELECT id, username, email FROM TheatreCompanyProject.user WHERE id = ?');
$statement->bind_param('i', $_SESSION['id']);
$statement->execute();
$statement->bind_result($id, $username, $email);
$statement->fetch();
