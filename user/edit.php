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

require_once "../connection/conn.php";

$conn = mysqli_connect($host, $usern, $pass, $database);
$rid = $_GET['rid'];
$statement = $conn->prepare('
    UPDATE review r
    set
    r.rating = ?,
    r.review = ?
where id = '.$rid.'

');

$statement->bind_param('is', $_POST['rating'], $_POST['review']);
$statement->execute();
header('Location: manageArticle.php');
exit;


?>