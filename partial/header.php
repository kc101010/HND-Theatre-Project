<!-- //WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development -->

<!doctype html>
<html lang="en">
<head>
    <!-- Metadata for Browser to utilise -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--
        List of Stylesheets
        -nav: handles headers
        -footer: handles footer stylings
        -style: handles pages and their content
    -->
    <link rel="stylesheet" href="../css/nav.css" type="text/css"/>
    <link rel="stylesheet" href="../css/footer.css" type="text/css"/>
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>

    <!-- Google Font Connection for website font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Monda:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome Connection for icons -->
    <script src="https://kit.fontawesome.com/abc0c36e7b.js" crossorigin="anonymous"></script>

    <!-- JS file allows the mobile menu to be hidden and displayed -->
    <script src="../js/mobile_nav.js" language="JavaScript" type="text/javascript"></script>

    <!-- Title for browser to utilise -->
    <title>Local Theatre Company</title>

</head>


<body>
    <!-- Section holds navigation content -->
    <section id="hdr-nav-container">
        <!-- Burger menu used in mobile display, toggles display of nav -->
        <span onclick="displayNav()" id="mob-nav-bar">
            <i class="fas fa-bars"></i>
        </span>

        <!-- Header for Nav, returns user to Home page -->
        <h1 title="Click here to go back to the home page!" id="hdr-text"> <a href="../home/index.php"> Local Theatre Company </a> </h1>

        <!-- Nav includes list with Links to main pages  -->
        <nav id="hdr-nav">
            <ul>
                <!--
                    List items links to:
                        - logging in
                        - main blog
                        - contact page
                -->
                <li class="hdr-nav-lnk"> <a href="../login_register/login.php"> Login/Register </a> </li>
                <li class="hdr-nav-lnk"> <a href="../blog/index.php"> Blog </a>  </li>
                <li class="hdr-nav-lnk"> <a href="../contact/index.php"> Contact </a> </li>

            </ul>
        </nav>
    </section>


