<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development


/** @var $id array */
/** @var $usern array */
/** @var $statement array*/

//call a query which allows the code to view the details of which user is logged on
include_once "../user/users_db.php";

/*call a header file that displays the logged in username and handles admins and users viewing their profiles
there must be a session id in order for this to be displayed*/
if ($_SESSION['id']) {
    include_once "../partial/hdr_login.php";
}else{
    include_once "../partial/header.php";
}
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

//call our database connection
require_once '../connection/conn.php';

//connect to our database using connection details
$conn = mysqli_connect($host, $usern, $pass, $database);

//get movie id passed from previous form on manageArticle
$mid = $_GET['mov_id'];

//prepare a statment for our database to execute
$statement = $conn->prepare('SELECT
    m.m_title,
    m.genre,
    m.release_date,
    m.m_img_path,
    r.id,
    r.review,
    r.rating,
    u.username,
    u.id,
    r.fk_movie_id,
    r.fk_user_id
FROM TheatreCompanyProject.movie m

         left join review r on m.id = r.fk_movie_id
         left join user u on u.id = r.fk_user_id
where m.id = '.$mid.' and r.fk_movie_id = '.$mid.' ');
//this query selects most review information, makes sure that the movie id matches the movie id in the review


//have the database execute the query
$statement->execute();

//store the query results
$statement->store_result();

//declare variables to hold the results from the query
$statement->bind_result( $title,$genre, $release, $movieImg, $rid, $review, $rating, $username, $uid, $fk_movie, $fk_user);

//essentially make our variables available to the program
$statement->fetch();

?>
    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header">Edit Article</h1>

        <!-- Review Data  -->
        <h1> <?= $title ?>  </h1>
        <img class="article_img"   height=500 width=300 src="../images/movie/<?= $movieImg ?>"/>
        <p> <?=$release ?> </p>
        <p> <?=$genre ?> </p>
        <p> <?=$username ?> </p>

        <p> <?=$rating ?> </p>
        <p class="main_text"> <?=$review ?> </p>

        <!-- Small header for form -->
        <h3 class="form_component">Edit Review</h3>
        <form method="post" id="frm_mngblog">
            <!-- Input tab for user to enter their rating for the movie, can't be empty -->
            <input class="form_component" type="text" name="rating" value="<?=$rating?>" id="edt_rating">

            <!-- Text area for user to alter the text of their review -->
            <textarea class="form_component" rows="15" cols="50" name="review" id="edt_review"><?=$review?></textarea>

            <!-- EDIT button submits changes written in the above fields, changes form action to edit the review -->
            <input class="form_component" id="frm_submit" formaction="edit.php?rid=<?=$rid?>" type="submit" value="EDIT">
            <!-- DELETE button deletes the review, changes form action to do so -->
            <input class="form_component" id="frm_submit" formaction="delete.php?rid=<?=$rid?>&uid=<?=$uid?>" type="submit" value="DELETE">
        </form>


    </section>
    <!-- call page footer -->
<?php include_once "../partial/footer.php";?>