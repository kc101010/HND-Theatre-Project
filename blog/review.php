<?php

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

/** @var $id array*/
/** @var $title array*/
/** @var $fk_movie array*/
/** @var $movieImg array*/

require_once "../connection/conn.php";

$conn = mysqli_connect($host, $usern, $pass, $database);
$statement = $conn->prepare('SELECT 
       m_title,
       genre,
       m_img_path,
       rating

        
       FROM TheatreCompanyProject.movie, TheatreCompanyProject.review 
        

      
       ');

$statement->execute();
$statement->store_result();
$statement->bind_result( $title,$genre, $movieImg, $rating);
$statement->fetch();




?>