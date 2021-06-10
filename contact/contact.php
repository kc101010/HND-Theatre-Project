<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

//call our database connection
require_once "../connection/conn.php";

/*call a header file that displays the logged in username and handles admins and users viewing their profiles
there must be a session id in order for this to be displayed*/
if ($_SESSION['id']) {
    include_once "../partial/hdr_login.php";
}else{
    include_once "../partial/header.php";
}

$conn = mysqli_connect($host, $usern, $pass, $database);

//connect to our database using connection details
$statement = $conn->prepare('
    INSERT into contact (name, email, feedback) VALUES(?,?,?);
');

//bind parameters for sql query to use
$statement->bind_param('sss', $_POST['name'], $_POST['email'], $_POST['contact_txt']);

//execute query
$statement->execute();

//redirect to home page after submitting
header('Location : ../home/index.php');
echo('Thank you for your feedback!');

?>