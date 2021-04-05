// array of image sources:
let images = [
    'image1.png', 'image2.png', 'image3.png','image4.png'
];
var left_button = document.getElementById("left");
var right_button = document.getElementById("right");
var canvas = document.getElementById("canvas");

var cpt = 0;
setInterval(function () {
    if (cpt == images.length - 1) {
        cpt = 0;
    }else{
        cpt++;
    }
    canvas.style.backgroundImage = "url(images/"+images[cpt]+")";
}, 6000);
left_button.addEventListener("click", function () {
    if (cpt == 0) {
        cpt = images.length - 1;
    }else{
        cpt--;
    }
    canvas.style.backgroundImage = "url(images/"+images[cpt]+")";
});
right_button.addEventListener("click", function () {
    if (cpt == images.length - 1) {
        cpt = 0;
    }else{
        cpt++;
    }
    canvas.style.backgroundImage = "url(images/"+images[cpt]+")";
});

    //document on ready canvas background-image
    canvas.style.backgroundImage = "url(images/"+images[cpt]+")";

