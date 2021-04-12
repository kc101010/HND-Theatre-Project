
//displayNav checks the state of that nav bar and toggles accordingly
function displayNav(){
    var nav = document.querySelector("#hdr-nav");

    if(nav.style.display == "block"){
        nav.style.display = "none";
    }else{
        nav.style.display = "block";
    }


}
//resetNav() checks for changes to window width and shows the nav bar accordingly
function resetNav(){
    if(window.innerWidth >= 800){
        document.querySelector("#hdr-nav").style.display = "flex";
    }else if(window.innerWidth < 800){
        document.querySelector("#hdr-nav").style.display = "none";
    }
}

//event listener to run resetNav
window.addEventListener('resize', resetNav);



