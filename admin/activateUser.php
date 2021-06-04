<?php
/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

require_once '../connection/conn.php';

$conn = mysqli_connect($host, $usern, $pass, $database);
$uid = $_POST['username'];
$stmt = $conn->prepare('UPDATE user u
    set
    u.is_active = 1
    where (username = ?) OR (email = ?) ');

$stmt->bind_param('ss',$_POST['username'],$_POST['username']);
$stmt->execute();
header("Location: manageUser.php");
exit;
