<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development


/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */

/** @var $id array*/
/** @var $title array*/
/** @var $fk_movie array*/
/** @var $movieImg array*/

//call our database connection
require_once "../connection/conn.php";

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//prepare a statment for our database to execute
$statement = $conn->prepare('SELECT
    m.id,
    m_title,
    m.genre,
    m.release_date,
    m.m_img_path,
    r.id,
    r.review,
    r.rating,
    u.username,
    r.fk_movie_id,
    r.fk_user_id
    FROM TheatreCompanyProject.movie m
    left join review r on m.id = r.fk_movie_id
    left join user u on u.id = r.fk_user_id
    where u.is_active = 1
    order by r.id desc 
   ');
//SQL statement gathers information on movie, review and user used to display reviews on blog page

//have the database execute the query
$statement->execute();

//store the query results
$statement->store_result();

//declare variables to hold the results from the query
$statement->bind_result( $m_id,$m_title,$m_genre, $m_releaseDate, $m_movieImg, $rid, $m_review, $m_rating, $m_username, $fkMovie, $fkUser);

//essentially make our variables available to the program
//$statement->fetch();




?>