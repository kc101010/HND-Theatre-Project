<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $uid array */
/** @var $cName array */
/** @var $usrName array */

//call our database connection
require_once "../connection/conn.php";

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//get user id and review id from previous page
$uid = $_GET['uid'];
$rid = $_GET['rid'];

//prepare a statment for our database to execute
$statement = $conn->prepare('DELETE FROM TheatreCompanyProject.review where id = '.$rid.' and fk_user_id = '.$uid.' ');

//bind user id to query
$statement->bind_param('i', $_GET['uid']);

//have the database execute the query
$statement->execute();

//redirect admin to their manage article page
header('Location: ../admin/manageArticle.php');
exit;

?>