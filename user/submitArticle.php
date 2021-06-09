<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

//call our database connection
require '../connection/conn.php';

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $movID array*/

//connect to our database using connection details
$connection = mysqli_connect($host, $usern, $pass, $database);

//declare variable to hold the current session id for user
$uid = $_SESSION['id'];

//prepare a statment for our database to execute
$statement = $connection->prepare('INSERT INTO review (review, rating, fk_user_id, fk_movie_id) VALUES(?, ?, ?, ?); ');
//this query inserts a new review into the review table using parameters set by the next line of code

//binds these variables to the sanitised input in the prepared statement
$statement->bind_param('siii', $_POST['review'], $_POST['rating'], $uid, $_POST['rev_img']);

//have the database execute the query
$statement->execute();

//redirect the user back to their manage article page
header("Location: manageArticle.php");
?>