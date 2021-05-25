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
    m.id,
    m.m_title,
    m.genre,
    m.m_img_path,
    r.rating

        
    FROM TheatreCompanyProject.movie m, TheatreCompanyProject.review r
        
      
       ');

$statement->execute();
$statement->store_result();
$statement->bind_result( $id,$title,$genre, $movieImg, $rating);
$statement->fetch();




?>