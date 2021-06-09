<?php

//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

/** @var $id array */
/** @var $usern array*/
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
?>

    <!-- Main section of page -->
    <section id="sect_main">
        <h1 id="main_header"> Contact us </h1>

        <!-- Paragraphs hold contact information - have more specific styling than normal page text -->
        <p class="con_text"> Phone Number: 01505 000000 </p>
        <p class="con_text"> <a target="_blank" href="mailto: email@localtheatre.com" > Email: email@localtheatre.com </a> </p>
        <p class="con_text"> <a> Facebook </a> </p>
        <p class="con_text"> <a> Twitter </a> </p>

    </section>

<?php include_once "../partial/footer.php";?>

