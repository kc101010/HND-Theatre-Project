<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $id array */
/** @var $usern array */
/** @var $statement array*/

include_once "../user/users_db.php";

if ($_SESSION['id']) {
    include_once "../partial/hdr_login.php";
}else{
    include_once "../partial/header.php";
}
$statement->close();

/** @var $host array */
/** @var $usern array */
/** @var $pass array */
/** @var $database array */
/** @var $id array*/
/** @var $title array*/
/** @var $fk_movie array*/
/** @var $movieImg array*/

require_once '../connection/conn.php';
$conn = mysqli_connect($host, $usern, $pass, $database);
$mid = $_GET['mov_id'];
$statement = $conn->prepare('SELECT
    m.m_title,
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
where m.id = '.$mid.' and r.fk_movie_id = '.$mid.' and u.is_active = 1 ');

$statement->execute();
$statement->store_result();
$statement->bind_result( $title,$genre, $release, $movieImg, $review, $rating, $username, $fk_movie, $fk_user);
$statement->fetch();

?>
    <!-- Main section of page -->
    <section id="sect_main">

        <!-- Header used to display title -->
        <!-- info is provided through paragraphs -->
        <h1> <?= $title ?>  </h1>
        <img class="article_img"   height=500 width=300 src="../images/movie/<?= $movieImg ?>"/>
        <p> <?=$release ?> </p>
        <p> <?=$genre ?> </p>
        <p> <?=$rating ?> </p>
        <p> <?=$username ?> </p>
        <!-- This para required main_text for better styling -->
        <p class="main_text"> <?=$review ?> </p>


    </section>
    <!-- call page footer -->
<?php include_once "../partial/footer.php";?>