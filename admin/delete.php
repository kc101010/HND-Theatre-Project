<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $uid array */
/** @var $cName array */
/** @var $usrName array */


require_once "../connection/conn.php";

$conn = mysqli_connect($host, $usern, $pass, $database);
$uid = $_GET['uid'];
$rid = $_GET['rid'];

$statement = $conn->prepare('DELETE FROM TheatreCompanyProject.review where id = '.$rid.' and fk_user_id = '.$uid.' ');

$statement->bind_param('i', $_GET['uid']);
$statement->execute();
header('Location: ../admin/manageArticle.php');
exit;

?>