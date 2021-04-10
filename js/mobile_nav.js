
window.onload = function () {
    document.querySelector("ul").style.display = "none";

}

function displayNav(){

    var bars = document.getElementById("mob-nav-bar");
    var nav = document.querySelector("ul");

    if(nav.style.display === "block"){
        nav.style.display = "none";
    }else{
        nav.style.display = "block";
    }
}

