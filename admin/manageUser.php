<?php

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

include_once "../partial/hdr_login.php";
include_once "../user/users_db.php";
require_once '../connection/conn.php';
?>

    <section id="sect_main">
        <h1 id="main_header"> Manage User </h1>

        <form method="post" id="frm_mnguser">
            <input class="form_component" type="text" name="username" placeholder="Username/Email" id="username" required>

            <input id="frm_submit" formaction="activateUser.php" class="form_component" type="submit" value="Activate User">
            <input id="frm_submit" formaction="deacUser.php" class="form_component" type="submit" value="De-activate User">
        </form>
    </section>
