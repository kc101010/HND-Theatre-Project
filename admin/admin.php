<?php

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

include_once "../partial/hdr_login.php";
include_once "../user/users_db.php";
?>

    <section id="sect_main">
        <h1 id="main_header"> Dashboard [Admin] </h1>

        <p class="main_text"> username: <?=$_SESSION['name']?> </p>
        <p class="main_text"> email: <?=$_SESSION['mail']?> </p>

        <form action="../login_register/logout.php" id="frm_logout">
            <input id="frm_submit" class="form_component" type="submit" value="logout">
        </form>
    </section>



    <hr id="admin_panel_sep">

    <section id="sect_admin_panel">
        <h1 id="main_header"> Manage Users </h1>

        <p id="admin_deac_user" class="main_text"> De-activate user</p>
    </section>

    <hr id="admin_panel_sep">
<?php $statement->close() ?>
