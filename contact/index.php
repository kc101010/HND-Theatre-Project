<?php

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

include_once "../user/users_db.php";

if ($_SESSION['id']) {
    include_once "../partial/hdr_login.php";
}else{
    include_once "../partial/header.php";
}
?>

<section id="sect_main">
    <h1 id="main_header"> Contact us </h1>

    <p class="con_text"> Phone Number: 01505 000000 </p>
    <p class="con_text"> <a target="_blank" href="mailto: email@localtheatre.com" > Email: email@localtheatre.com </a> </p>
    <p class="con_text"> <a> Facebook </a> </p>
    <p class="con_text"> <a> Twitter </a> </p>

</section>

<?php include_once "../partial/footer.php";?>

