let btn_nav_open =document.getElementById("btn-nav-open");
let btn_nav_close =document.getElementById("btn-nav-close");
let nav_display = document.querySelector("#nav_display");

btn_nav_open.onclick = function() {
    nav_display.style = "transform: translateX(0%);"
};

btn_nav_close.onclick = function() {
    nav_display.style = "transform: translateX(-110%);"
};
