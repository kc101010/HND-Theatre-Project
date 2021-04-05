
window.onload = showLogin;

function showReg(){
   document.getElementById("sect_login").style.display = "none";
   document.getElementById("sect_regi").style.display = "block";

}

function showLogin(){
    document.getElementById("sect_login").style.display = "block";
    document.getElementById("sect_regi").style.display = "none";
}
