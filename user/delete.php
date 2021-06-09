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

//connect to the database using connection details (stored in vars)
$conn = mysqli_connect($host, $usern, $pass, $database);

//get the user id and review id passed from the form on previous page
$uid = $_GET['uid'];
$rid = $_GET['rid'];

//declare variable statement which prepares an SQL statement to be input to our database

$statement = $conn->prepare('DELETE FROM TheatreCompanyProject.review where id = '.$rid.' and fk_user_id = '.$uid.' ');
/*
 * this SQL statement will delete reviews from the review table, the review id and user id must match that of the review
 * being deleted
*/

//bind the user id to the sql statement
$statement->bind_param('i', $_GET['uid']);

//have the database execute the query
$statement->execute();

//redirect the user back to their manage article page and exit
header('Location: manageArticle.php');
exit;

?>