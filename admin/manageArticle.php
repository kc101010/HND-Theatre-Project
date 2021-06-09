<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $id array */
/** @var $usern array */
/** @var $statement array*/


//call a header file that displays the logged in username and handles admins and users viewing their profiles
include_once "../partial/hdr_login.php";
//call a query which allows the code to view the details of which user is logged on
include_once "../user/users_db.php";
//call our database connection
require_once '../connection/conn.php';

/*if there is not a user id for this current session, send whoever is trying to access this page to
  the login page*/
if(!isset($_SESSION['id'])){header("Location: ../login_register/login.php");}

//close our statements to prevent any issue with this new statement below
$statement->close();

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $id array*/
/** @var $title array*/
/** @var $fk_movie array*/
/** @var $movieImg array*/

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//prepare a statment for our database to execute
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
        where u.is_active = 1
        order by r.id desc ');
//this query finds reviews for ALL USERS

//have the databse execute the query
$statement->execute();

//store the query results
$statement->store_result();

//declare variables to hold the results from the query
$statement->bind_result( $title,$id,$genre, $release, $movieImg, $review, $rating, $uid, $username, $rid, $fk_movie, $fk_user);

//essentially make our variables available to the program
$statement->fetch();
?>
    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Manage Articles </h1>
    </section>

    <!-- Blog section -->
    <!-- (re-used from blog/index.php for easy display) -->
    <section id="sect_blog">
        <!-- PHP used to check whether there are query results -->
        <?php if ($statement->num_rows == 0): ?>
            <p class="main_text">There are no reviews</p>
        <?php else: ?>
            <!-- Display Review information -->
            <!-- Section holds reviews to be displayed -->
            <section id="sect_articls">
                <!-- PHP while statement to display reviews -->
            <?php while($statement->fetch()): ?>
                <!-- Container holds actual Review information -->
                <div class="article_container">
                    <!-- Link to review with full info -->
                    <a href="editArticle.php?mov_id=<?=$id?>">
                        <!-- Main image for review -->
                        <img class="article_img"   height=500 width=300 src="../images/movie/<?= $movieImg ?>"/>
                    </a>

                    <!-- Small summary of Article -->
                    <p class="article_title"> <?= $title ?> </p>
                    <p class="article_type"> <?= $genre ?> </p>
                    <p class="article_desc"> <?= $rating ?> </p>
                    <p class="article_user"> <?= $username ?> </p>
                </div>
            <?php endwhile; ?>
            </section>
        <?php endif;?>
    </section>
