<?php include_once "../partial/header.php";?>
<script language="JavaScript" type="text/javascript" src="../js/login.js"></script>

<section id="sect_main">
    <h1 id="main_header">Login/Register</h1>

    <div id="sect_login">
        <h2 id="login_header"> Login </h2>

        <form action="auth.php" method="post" id="frm_login">
            <input class="form_component" type="text" name="username" placeholder="Username/Email" id="username" required>
            <input class="form_component" type="password" name="password" placeholder="Password" id="password" required>
            <input id="frm_submit" class="form_component" type="submit" value="Log in">
        </form>

        <p class="login_switch" onclick="showReg()"> Click here to register an account</p>
    </div>


    <div id="sect_regi">
        <h2 id="login_header"> Register </h2>

        <form action="register.php" method="post"  id="frm_regi">
            <input class="form_component" type="text" name="username" placeholder="Username" required>
            <input class="form_component" type="email" name="email" placeholder="Email">
            <input class="form_component" type="password" name="password" placeholder="Password" required>
            <input class="form_component" type="password" name="user_conf_password" placeholder="Confirm Password" required>
            <input id="frm_submit" class="form_component" type="submit" value="Register">
        </form>

        <p class="login_switch" onclick="showLogin()"> Click here to log in to an account</p>
    </div>



</section>

<?php include_once "../partial/footer.php";?>
