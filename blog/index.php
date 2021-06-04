<?php

/** @var $id array */
/** @var $usern array */
/** @var $statement array*/

include_once "../user/users_db.php";


//if ($_SESSION['is_admin']) {include_once "../admin/admin.php";}
if($_SESSION['id']){include_once "../partial/hdr_login.php";}
else{include_once "../partial/header.php";}

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
            <a href="article.php?mov_id=<?=$m_id?>">
                <img class="article_img"   height=500 width=300 src="../images/movie/<?= $m_movieImg ?>"/>
            </a>

            <p class="article_title"> <?= $m_title ?> </p>
            <p class="article_type"> <?= $m_genre ?> </p>
            <p class="article_desc"> <?= $m_rating ?> </p>
            <p class="article_user"> <?= $m_username ?> </p>
        </div>
        <?php endwhile; ?>

    </section>

<?php include_once "../partial/footer.php";?>