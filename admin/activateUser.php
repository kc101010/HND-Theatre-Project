<?php
/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//call our database connection
require_once '../connection/conn.php';

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//get the username from the activate user form on previous page
$uid = $_POST['username'];

//prepare a statment for our database to execute
$stmt = $conn->prepare('UPDATE user u
    set
    u.is_active = 1
    where (username = ?) OR (email = ?) ');
//sql statement sets user to active if either the username or email matches the value of $uid

//bind username twice as we did during login to check the input as username and email
$stmt->bind_param('ss',$_POST['username'],$_POST['username']);

//have the database execute the query
$stmt->execute();

//redirect admin to their manage user page
header("Location: manageUser.php");
exit;
