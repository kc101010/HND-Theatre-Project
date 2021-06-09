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
/** @var $movie array*/
/** @var $movID array*/
/** @var $movImg array*/
/** @var $movTitle array*/

//call our database connection
include_once '../connection/conn.php';

//connect to our database using connection details
$connection = mysqli_connect($host, $usern, $pass, $database);

//prepare a statment for our database to execute
$movie = $connection->prepare('SELECT m.id, m.m_title, m.m_img_path FROM TheatreCompanyProject.movie m');
//this query selects the id, title and img of movies stored in the table


//have the database execute the query
$movie->execute();

//store the query results
$movie->store_result();

//declare variables to hold the results from the query
$movie->bind_result($movID, $movTitle, $movImg)


?>
    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Add new Article </h1>

        <!-- Form to submit new articles to the database -->
        <form method="post" action="submitArticle.php">
            <!-- Small header for Form -->
            <h3> Article Details </h3>

            <!-- Input tab for user to enter their rating for the movie, can't be empty -->
            <input class="form_component" type="text" name="rating" id="new_rev_rat" placeholder="Rating" required>
            <!-- Text area for user to enter the text of their review -->
            <textarea class="form_component" rows="15" cols="50" name="review" id="new_rev_txt" placeholder="Your Text Here"></textarea>

            <!-- Dropdown menu for user to select which movie to review -->
            <select class="form_component"  name="rev_img" id="new_rev_img">
                <!-- First option informs user on this menus function  -->
                <option> Movie Select </option>
                <!-- PHP while statement iterates through query results -->
                <?php while($movie->fetch()): ?>
                    <!-- Creates a new option that holds query results -->
                    <option value="<?=$movID?>"><?=$movTitle?> <?=$movID?></option>
                <?php endwhile;?>
            </select>


            <!-- Submit Button submits users new Article -->
            <input class="form_component" id="frm_submit" type="submit" value="SUBMIT">
        </form>

    </section>
