<?php include_once "../partial/header.php";?>
<script language="JavaScript" type="text/javascript" src="../js/login.js"></script>

<section id="sect_main">
    <h1 id="main_header">Login/Register</h1>

    <div id="sect_login">
        <h2 id="login_header"> Login </h2>

        <form id="frm_login">
            <input class="form_component" type="text" name="user_id" placeholder="Username/Email">
            <input class="form_component" type="password" name="user_password" placeholder="Password">
            <input id="frm_submit" class="form_component" type="submit" value="Log in">
        </form>

        <p class="login_switch" onclick="showReg()"> Click here to register an account</p>
    </div>


    <div id="sect_regi">
        <h2 id="login_header"> Register </h2>

        <form id="frm_regi">
            <input class="form_component" type="text" name="username" placeholder="Username">
            <input class="form_component" type="email" name="user_email" placeholder="Email">
            <input class="form_component" type="password" name="user_password" placeholder="Password">
            <input class="form_component" type="password" name="user_conf_password" placeholder="Confirm Password">
            <input id="frm_submit" class="form_component" type="submit" value="Register">
        </form>

        <p class="login_switch" onclick="showLogin()"> Click here to log in to an account</p>
    </div>



</section>

<?php include_once "../partial/footer.php";?>
