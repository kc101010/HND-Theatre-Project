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
    m_title,
    m.genre,
    m.release_date,
    m.m_img_path,
    r.review,
    r.rating,
    u.username,
    r.fk_movie_id,
    r.fk_user_id
    FROM TheatreCompanyProject.movie m
    left join review r on m.id = r.fk_movie_id
    left join user u on u.id = r.fk_user_id
    where u.is_active = 1
    order by r.id DESC
   ');

$statement->execute();
$statement->store_result();
$statement->bind_result( $m_id,$m_title,$m_genre, $m_releaseDate, $m_movieImg, $m_review, $m_rating, $m_username, $fkMovie, $fkUser);
$statement->fetch();




?>