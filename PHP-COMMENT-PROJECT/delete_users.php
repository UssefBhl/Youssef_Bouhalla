<?php
include_once('connection.php');
    $user = $_POST['user'];

    $dlt_comment = "DELETE FROM comments WHERE comment_user = '$user'";
    $dlt_user = "DELETE FROM user WHERE username = '$user'";
    
    $delete_cmt = mysqli_query($connect,$dlt_comment);

    if ($delete_cmt) {
        mysqli_query($connect,$dlt_user);
    }
?>