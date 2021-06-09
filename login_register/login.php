<?php
//WRITTEN BY KYLE CHRISTIE, GLASGOW CLYDE COLLEGE (2021) -- DEVELOPING WEBSITES FOR MULTIPLATFORM USE ~ HND Software Development

//include the normal header as there should be no user logged in
include_once "../partial/header.php";

?>
    <!-- Declare a new script, this script handles switching between the register and login forms -->
    <script language="JavaScript" type="text/javascript" src="../js/login.js"></script>

    <!-- Main section of page -->
    <section id="sect_main">
        <!-- Main Header (offset) -->
        <h1 id="main_header">Login/Register</h1>

        <!-- Divider holds login form and related content -->
        <div id="sect_login">
            <!-- Small header for form -->
            <h2 id="login_header"> Login </h2>

            <!-- Login form holds the following
                 - username/email input
                 - password input
                 - submit button

                 uses auth.php to permit logging in/handle incorrect information
             -->
            <form action="auth.php" method="post" id="frm_login">
                <input class="form_component" type="text" name="username" placeholder="Username/Email" id="username" required
                       value="<?php
                       //check if the cookie is set, display the username if it is. Display nothing if its not.
                       if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}else{echo"";}
                       ?>">

                <input class="form_component" type="password" name="password" placeholder="Password" id="password" required>
                <input id="frm_submit" class="form_component" type="submit" value="Log in">
            </form>

            <!-- This paragraph allows the user to switch forms and utilises the JS file declared before main -->
            <p class="login_switch" onclick="showReg()"> Click here to register an account</p>
        </div>

        <!-- Divider holds register form and related content -->
        <div id="sect_regi">
            <!-- Small header for form -->
            <h2 id="login_header"> Register </h2>

            <!-- Login form holds the following
                 - username input
                 - email input
                 - password input
                 - confirm password
                 - submit button

                 uses register.php to manipulate database
             -->
            <form action="register.php" method="post"  id="frm_regi">
                <input class="form_component" type="text" name="username" placeholder="Username" required>
                <input class="form_component" type="email" name="email" placeholder="Email">
                <input class="form_component" type="password" name="password" placeholder="Password" required>
                <input class="form_component" type="password" name="user_conf_password" placeholder="Confirm Password" required>
                <input id="frm_submit" class="form_component" type="submit" value="Register">
            </form>

            <!-- This paragraph allows the user to switch forms and utilises the JS file declared before main -->
            <p class="login_switch" onclick="showLogin()"> Click here to log in to an account</p>
        </div>



    </section>
<!-- Call site footer -->
<?php include_once "../partial/footer.php";?>
