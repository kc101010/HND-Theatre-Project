//always show the login page when loading
window.onload = showLogin;

//showReg displays the Register form on login page
function showReg(){
   document.getElementById("sect_login").style.display = "none";
   document.getElementById("sect_regi").style.display = "block";

}

//showLogin displays the Login form on login page
function showLogin(){
    document.getElementById("sect_login").style.display = "block";
    document.getElementById("sect_regi").style.display = "none";
}
