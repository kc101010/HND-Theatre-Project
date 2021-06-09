<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

//start a session, stores login and similar data
session_start();

//declares connection info
$host = 'localhost';
$usern = 'homestead';
$pass = 'secret';
$database = 'TheatreCompanyProject';

//attempt connection to DB and handle errors
if(mysqli_connect_errno()){ exit('Failed to connect to MySQL: ' . mysqli_connect_error());}
