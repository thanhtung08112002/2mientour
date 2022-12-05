const $$ = document.querySelectorAll.bind(document);
var api = "http://localhost:3000/games";

const behavior = document.querySelectorAll(".schedule-step-icon")

behavior.forEach(element => {

    element.addEventListener('click', function clickList() {
        if (element.firstElementChild.innerHTML === 'THU GỌN') {
            element.parentElement.nextElementSibling.style.display = "none"
            element.firstElementChild.innerHTML = "XEM THÊM"
            element.lastElementChild.style = "transform: rotate(0deg);";
        } else {
            element.parentElement.nextElementSibling.style.display = "block"
            element.firstElementChild.innerHTML = "THU GỌN"
            element.lastElementChild.style = "transform: rotate(180deg);";

        }
    })
});

let btn_nav_open = document.getElementById("btn-nav-open");
let btn_nav_close = document.getElementById("btn-nav-close");
let nav_display = document.querySelector("#nav_display");

btn_nav_open.onclick = function () {
    nav_display.style = "transform: translateX(0%);"
};

btn_nav_close.onclick = function () {
    nav_display.style = "transform: translateX(-110%);"
};