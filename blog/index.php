<?php

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

include_once "review.php";
?>

    <section id="sect_main">
        <h1 id="main_header"> Blog </h1>

    </section>

    <section id="sect_blog">
        <div id="blog_cat">
            <h2 id="blog_cat_head"> Categories </h2>

            <ul id="blog_cat_list">
                <li>Announcements</li>
                <li>Articles</li>
                <li>Our Reviews</li>
            </ul>

        </div>


        <div title="Click the image to view the article!" id="latest_article">
            <img id="latest_art_img" src="https://via.placeholder.com/200x200">
            <h2> Latest Article</h2>
            <p> A small replacement placeholder description</p>
        </div>
    </section>


    <section id="sect_articles">
        <?php while($statement->fetch()): ?>
        <div title="Click the image to view the article!" class="article_container">
            <img class="article_img" height=500 width=300 src="../images/movie/<?= $movieImg ?>"/>
            <p class="article_title"> <?= $title ?> </p>
            <p class="article_type"> <?= $genre ?> </p>
            <p class="article_desc"> <?= $rating ?> </p>
        </div>
        <?php endwhile; ?>

    </section>

<?php include_once "../partial/footer.php";?>