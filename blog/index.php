<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $id array */
/** @var $usern array */
/** @var $statement array*/

//call a query which allows the code to view the details of which user is logged on
include_once "../user/users_db.php";

//check if theres a session id and call login header to set accordingly
if($_SESSION['id']){include_once "../partial/hdr_login.php";}
else{include_once "../partial/header.php";}

$statement->close();

/*separated statement for displaying reviews into a separate file
  for cleaner code and to prevent clashes with other SQL statements*/
include "review.php";
?>
    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Blog </h1>
    </section>

    <!-- Blog section holds upper content of the total blog page-->
    <section id="sect_blog">
        <!-- Holds categoriies and latest article -->
        <div id="blog_cat">
            <!-- Header for categories -->
            <h2 id="blog_cat_head"> Categories </h2>

            <!-- List of categories -->
            <ul id="blog_cat_list">
                <li>Announcements</li>
                <li>Articles</li>
                <li>Our Reviews</li>
            </ul>
        </div>

        <!-- div holds latest article  -->
        <div title="Click the image to view the article!" id="latest_article">
            <!-- contains image, header and some text -->
            <img id="latest_art_img" src="https://via.placeholder.com/200x200">
            <h2> Latest Article</h2>
            <p> A small replacement placeholder description</p>
        </div>
    </section>

    <!-- Article section holds rest of page content -->
    <section id="sect_articles">
        <!-- PHP while statement used to iterate through query resuts -->
        <?php while($statement->fetch()): ?>
        <!-- div is container that holds article summary -->
        <div title="Click the image to view the article!" class="article_container">
            <!-- Link embedded into img, alows user to click into article/review itself -->
            <a href="article.php?rid=<?=$rid?>">
                <img class="article_img"   height=500 width=300 src="../images/movie/<?= $m_movieImg ?>"/>
            </a>

            <!-- Paragraphs used to provide some detail on article/review -->
            <p class="article_title"> <?= $m_title ?> </p>
            <p class="article_type"> <?= $m_genre ?> </p>
            <p class="article_desc"> <?= $m_rating ?> </p>
            <p class="article_user"> <?= $m_username ?> </p>
        </div>
        <?php endwhile; ?>

    </section>

    <!-- call page footer -->
<?php include_once "../partial/footer.php";?>