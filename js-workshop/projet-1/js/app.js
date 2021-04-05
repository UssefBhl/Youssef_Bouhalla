var input_value;
var error = document.querySelector(".error");
var content = document.querySelector(".message-content");
setInterval(function() {
    input_value = $("#message").val();
    if (input_value == '') {
        error.classList.add("show");
    }else{
        error.classList.remove("show");
    }
},100);


$(document).on("submit","#message-form", function (e) {
    e.preventDefault();
    input_value = $("#message").val();
    if (input_value != '') {
        content.innerHTML = input_value;
        // $("#message").val('');
    }
});