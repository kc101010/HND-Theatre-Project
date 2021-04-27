<?php

session_start();

//connection info
$host = 'localhost';
$usern = 'homestead';
$pass = 'secret';
$database = 'TheatreCompanyProject';

//attempt a connection
if(mysqli_connect_errno()) exit('Failed to connect to MySQL: ' . mysqli_connect_error());
