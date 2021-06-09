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
/** @var $movie array*/
/** @var $movID array*/
/** @var $movImg array*/
/** @var $movTitle array*/

include_once '../connection/conn.php';

$connection = mysqli_connect($host, $usern, $pass, $database);

$movie = $connection->prepare('SELECT m.id, m.m_title, m.m_img_path FROM TheatreCompanyProject.movie m');
$movie->execute();
$movie->store_result();
$movie->bind_result($movID, $movTitle, $movImg)


?>

    <section id="sect_main">
        <h1 id="main_header"> Add new Article </h1>

        <form method="post" action="submitArticle.php">
            <h3> Article Details </h3>

            <input class="form_component" type="text" name="rating" id="new_rev_rat" placeholder="Rating" required>
            <textarea class="form_component" rows="15" cols="50" name="review" id="new_rev_txt" placeholder="Your Text Here"></textarea>

            <select class="form_component"  name="rev_img" id="new_rev_img">
                <option> Image Select </option>
                <?php while($movie->fetch()): ?>
                    <option value="<?=$movID?>"><?=$movTitle?> <?=$movID?></option>
                <?php endwhile;?>
            </select>



            <input class="form_component" id="frm_submit" type="submit" value="SUBMIT">
        </form>

    </section>
