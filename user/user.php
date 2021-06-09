<?php
    /** @var $id array */
    /** @var $usern array*/
    /** @var $statement array*/

    //call a query which allows the code to view the details of which user is logged on
    include_once "../user/users_db.php";
    //user should be logged in to view this page so no need to check which header should be displayed
    include_once "../partial/hdr_login.php";
?>

    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header"> Dashboard </h1>

        <!-- Username and Email Display -->
        <p class="main_text"> username: <?=$_SESSION['name']?> </p>
        <p class="main_text"> email: <?=$_SESSION['mail']?> </p>

        <!-- Form holds button which logs user out -->
        <form action="../login_register/logout.php" id="frm_logout">
            <input id="frm_submit" class="form_component" type="submit" value="logout">
        </form>

        <!-- Form holds button to change account password -->
        <form action="" id="frm_logout">
            <input id="frm_submit" class="form_component" type="submit" value="change password">
        </form>


    </section>

    <!-- Horizontal rule used to indicate different sections -->
    <hr id="admin_panel_sep">

    <!--
    This section is called 'admin' so that it shares the same styling, it is simply a separate section that holds
    a users article utilities
    -->
    <section id="sect_admin_panel">
        <h1 id="main_header"> Article Tools </h1>

        <p id="usr_mng_art" class="main_text"> <a href="manageArticle.php"> Manage Article </a> </p>
        <p id="usr_new_art" class="main_text"> <a href="newArticle.php"> New Article </a> </p>

    </section>

<!-- close statement for finding user details -->
<?php $statement->close(); ?>



