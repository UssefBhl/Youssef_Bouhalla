//array example const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green']

const colors = ['black', 'white', 'blue', 'yellow', 'pink', 'green'];

var click_me = document.querySelector(".click_me");
var body = document.querySelector("body");


click_me.addEventListener("click", function () {
    var ran_color = Math.floor(Math.random() * colors.length);
    body.style.backgroundColor = colors[ran_color];
});
