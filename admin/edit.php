<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $id array */
/** @var $id array */
/** @var $rid array */
/** @var $review array */

//call our database connection
require_once "../connection/conn.php";


//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//get the review id passed from the form on the previous page
$rid = $_GET['rid'];

//prepare a statment for our database to execute
$statement = $conn->prepare('
    UPDATE review r
    set
    r.rating = ?,
    r.review = ?
where id = '.$rid.'

');
//this query updates the currently select review in the table with new data passed in the next line of code

//bind the rating and review text to the query
$statement->bind_param('is', $_POST['rating'], $_POST['review']);

//have the database execute the query
$statement->execute();

//redirect the admin back to their manage article page and exit
header('Location: ../admin/manageArticle.php');
exit;


?>