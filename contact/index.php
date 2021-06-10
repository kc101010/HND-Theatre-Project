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

        <div id="sect_login">
            <h2 id="login_header"> Contact Form </h2>

            <form method="post" action="contact.php" id="frm_login">
                <input class="form_component" type="text" name="name" placeholder="Name" required>
                <input class="form_component" type="email" name="email" placeholder="Email" required>
                <textarea class="form_component" rows="15" cols="30" name="contact_txt" id="txt_contact"></textarea>
                <input class="form_component" id="frm_submit"  type="submit" value="Submit">
            </form>
        </div>

    </section>

<?php include_once "../partial/footer.php";?>

