<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $id array */
/** @var $usern array */
/** @var $statement array*/



include_once "../partial/hdr_login.php";
include_once "../user/users_db.php";
require_once '../connection/conn.php';
if(!isset($_SESSION['id'])){header("Location: ../login_register/login.php");}
$user = $_SESSION['id'];
$statement->close();

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $id array*/
/** @var $title array*/
/** @var $fk_movie array*/
/** @var $movieImg array*/

$conn = mysqli_connect($host, $usern, $pass, $database);

$statement = $conn->prepare('SELECT
    m_title,
    m.id,
    m.genre,
    m.release_date,
    m.m_img_path,
    r.review,
    r.rating,
    u.id,
    u.username,
    r.id,
    r.fk_movie_id,
    r.fk_user_id
FROM TheatreCompanyProject.movie m

         left join review r on m.id = r.fk_movie_id
         left join user u on u.id = r.fk_user_id

where u.id = '.$user.' and u.is_active = 1 
order by r.id desc');


$statement->execute();
$statement->store_result();
$statement->bind_result( $title,$id,$genre, $release, $movieImg, $review, $rating, $uid, $username, $rid, $fk_movie, $fk_user);
$statement->fetch();
?>

    <section id="sect_main">
        <h1 id="main_header"> Manage Articles </h1>
    </section>

    <section id="sect_blog">
        <?php if ($statement->num_rows == 0): ?>
            <p class="main_text">There are no reviews</p>
        <?php else: ?>
            <section id="sect_articls">
            <?php while($statement->fetch()): ?>
                <div class="article_container">
                    <a href="editArticle.php?mov_id=<?=$id?>">
                        <img class="article_img"   height=500 width=300 src="../images/movie/<?= $movieImg ?>"/>
                    </a>

                    <p class="article_title"> <?= $title ?> </p>
                    <p class="article_type"> <?= $genre ?> </p>
                    <p class="article_desc"> <?= $rating ?> </p>
                    <p class="article_user"> <?= $username ?> </p>
                </div>
            <?php endwhile; ?>
            </section>
        <?php endif;?>
    </section>
