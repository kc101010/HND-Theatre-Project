<?php

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

//include the logged in header as the user must be logged in to access this page
include_once "../partial/hdr_login.php";

//call a query which allows the code to view the details of which user is logged on
include_once "../user/users_db.php";
?>
    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Dashboard [Admin] </h1>

        <!-- Paragraphs display username and email taken from session -->
        <p class="main_text"> username: <?=$_SESSION['name']?> </p>
        <p class="main_text"> email: <?=$_SESSION['mail']?> </p>

        <!-- Form allows user to log out -->
        <form action="../login_register/logout.php" id="frm_logout">
            <input id="frm_submit" class="form_component" type="submit" value="logout">
        </form>

        <!-- Form allows user to change password -->
        <form action="" id="frm_chngpword">
            <input id="frm_submit" class="form_component" type="submit" value="change password">
        </form>

    </section>


    <!-- Horizontal rule to separate different sections -->
    <hr id="admin_panel_sep">

    <!-- Admin panel for handling articles and users, admins can access every article unlike normal users -->
    <section id="sect_admin_panel">
        <!-- Offset header for section -->
        <h1 id="main_header"> Tools </h1>

        <!-- Paragraphs act as links/buttons into the respective pages -->
        <p id="admin_deac_user" class="main_text"> <a href="manageUser.php"> Manage User </a> </p>
        <p id="admin_mng_art" class="main_text"> <a href="manageArticle.php"> Manage Article </a> </p>
        <p id="admin_new_art" class="main_text"> <a href="newArticle.php"> New Article </a> </p>

    </section>

    <!-- Horizontal rule to separate different sections -->
    <hr id="admin_panel_sep">
<?php $statement->close() ?>
