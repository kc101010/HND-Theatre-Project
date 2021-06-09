<?php
/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//essentially an inverted activateUser

//call our database connection
require_once '../connection/conn.php';

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//get username from input on manageUser
$uid = $_POST['username'];

//prepare a statment for our database to execute
$stmt = $conn->prepare('UPDATE user u
    set
    u.is_active = 0
    where (username = ?) OR (email = ?) ');
//sql statement sets user to inactive if either the username or email matches the value of $uid

//bind username twice as we did during login to check the input as username and email
$stmt->bind_param('ss',$_POST['username'],$_POST['username']);

//have the database execute the query
$stmt->execute();

//redirect admin to their manage user page
header("Location: manageUser.php");
exit;