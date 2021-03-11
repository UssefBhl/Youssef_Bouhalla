<?php
include_once('connection.php');
if (isset($_POST['comment']) && isset($_POST['user'])) {
    mysqli_query($connect, 'INSERT INTO comments ( comment_user,message) VALUES( "'.$_POST['user'].'","' . $_POST['comment'] . '")');
}
// if (isset($_POST['logout'])) {
//     session_destroy();
//     header('Location: login.php');
// }
?>