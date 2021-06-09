<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

require '../connection/conn.php';

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $movID array*/


$connection = mysqli_connect($host, $usern, $pass, $database);

$uid = $_SESSION['id'];

$statement = $connection->prepare('INSERT INTO review (review, rating, fk_user_id, fk_movie_id) VALUES(?, ?, ?, ?); ');
$statement->bind_param('siii', $_POST['review'], $_POST['rating'], $uid, $_POST['rev_img']);
$statement->execute();

header("Location: ../admin/manageArticle.php");
?>