// let input_box = document.querySelector(".t9adiya_inp");
// let todo_list = document.querySelector(".t9adiya_list");
// let btn_clear = document.querySelector(".clear");
// let message_box = document.querySelector(".message");
// let input_value;
// let values = [];
// let cpt = 0;
// let check_boxes = [];
// let messages = [];
// let dlts = [];
// let t9adiya = [];
// $(document).on("click",".add" , function(){
//     input_value = input_box.value;
//     if(values.includes(input_value)){
//         input_box.value = '';
//         return;
//     }
//     values.push(input_value);

    
//     todo_list.innerHTML += "<div class='t9adiya'><input type='checkbox' name='check' class='check'><p class='info'>"+ input_value +"</p><button class='delete'>delete</button></div>";

//     message_box.innerHTML = "added item successfully";
//     message_box.style.color = "green"
//     input_box.value = '';
// });

// setInterval(() =>{
//     // getting checkboxes t9adiya and delete buttons and messages
//     check_boxes = document.getElementsByClassName("check");
//     messages = document.getElementsByClassName("info");
//     dlts = document.getElementsByClassName("delete");
//     t9adiya = document.getElementsByClassName("t9adiya");
//     for (let index = 0; index < t9adiya.length; index++){
//         // check if a checkbox checked then give its message a line-through
//         if(check_boxes[index].checked == true){
//             messages[index].style.textDecoration = "line-through red";
//         }else{
//             messages[index].style.textDecoration = "none";
//         }
//     }
// },100);


// document.onclick = function(e) {

//     if(e.target.className == 'delete') {
//         e.target.parentNode.remove();
//         values.splice(input_box.value);
        
//     }
// }
// $(document).on("click",".clear",function () {
//     dlts = [];
//     messages = [];
//     check_boxes = [];
//     t9adiya = [];
//     values = [];
//     todo_list.innerHTML = '<button class="clear">Clear the list of t9adiya</button>';
// });
    












let input_box = document.querySelector(".t9adiya_inp");
let add_btn = document.querySelector(".add");
let t9adiya_list = document.querySelector(".t9adiya_list");
let clear_btn = document.getElementById("clear");
let input_value;
let values = [];
add_btn.addEventListener("click",() =>{
    input_value = input_box.value;

    if(values.includes(input_value)){
        input_box.value = '';
        return;
    }

    values.push(input_value);

    t9adiya_list.innerHTML += "<div class='t9adiya'><input type='checkbox' name='check' class='check'><p class='info'>"+ input_value +"</p><button class='delete'>delete</button></div>";

    input_box.value = '';
});



// clear_btn.addEventListener("click",() => {
//     console.log("hello");
//     let t9adiya = document.getElementsByClassName("t9adiya");
//     t9adiya.classList.remove();
// });
document.onclick = function(e){
    if(e.target.className == "clear"){
        // e.target.parentNode.removeChild("t9adiya");
        t9adiya_list.innerHTML = '<button class="clear" id="clear">Clear the list of t9adiya</button>';
    }
}
