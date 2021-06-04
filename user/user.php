<?php
    /** @var $id array */
    /** @var $usern array*/
    /** @var $statement array*/

    include_once "../user/users_db.php";
    include_once "../partial/hdr_login.php";
?>

<section id="sect_main">
    <h1 id="main_header"> Dashboard </h1>

    <p class="main_text"> username: <?=$_SESSION['name']?> </p>
    <p class="main_text"> email: <?=$_SESSION['mail']?> </p>

    <form action="../login_register/logout.php" id="frm_logout">
        <input id="frm_submit" class="form_component" type="submit" value="logout">
    </form>

    <form action="" id="frm_logout">
        <input id="frm_submit" class="form_component" type="submit" value="change password">
    </form>

</section>

<?php $statement->close(); ?>



