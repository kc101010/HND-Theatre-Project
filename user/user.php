<?php

    /** @var $id array */
    /** @var $usern array*/
    /** @var $email array*/
    /** @var $statement array*/


    include_once "../user/users_db.php";
?>

<section id="sect_main">
    <h1 id="main_header"> Dashboard </h1>

    <p class="main_text"> username: <?=$_SESSION['name']?> </p>
    <p class="main_text"> email: <?=$_SESSION['email']?> </p>

</section>

<?php $statement->close() ?>



