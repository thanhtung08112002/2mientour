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