
<?php

/** @var $id array */
/** @var $usern array*/
/** @var $statement array*/

include_once "../user/users_db.php";

if($_SESSION['is_admin']){$url = "../admin/admin.php";}
else{$url = "../user/user.php";}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/nav.css" type="text/css"/>
    <link rel="stylesheet" href="../css/footer.css" type="text/css"/>
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/abc0c36e7b.js" crossorigin="anonymous"></script>
    <script src="../js/mobile_nav.js" language="JavaScript" type="text/javascript"></script>

    <title>Local Theatre Company</title>

</head>


<body>

    <section id="hdr-nav-container">

        <span onclick="displayNav()" id="mob-nav-bar">
            <i class="fas fa-bars"></i>
        </span>

        <h1 title="Click here to go back to the home page!" id="hdr-text"> <a href="../home/index.php"> Local Theatre Company </a> </h1>

        <nav id="hdr-nav">
            <ul>
                <li class="hdr-nav-lnk"> <a href="<?=$url?>"> Logged in: <?=$_SESSION['name']?> </a> </li>
                <li class="hdr-nav-lnk"> <a href="../blog/index.php"> Blog </a>  </li>
                <li class="hdr-nav-lnk"> <a href="../contact/index.php"> Contact </a> </li>

            </ul>
        </nav>
    </section>


