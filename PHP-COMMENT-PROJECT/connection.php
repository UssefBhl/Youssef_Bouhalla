<?php
    $server = "localhost";
    $username = "root";
    $password = "yareyaredaze";
    $database = "comment_section";

    $connect = mysqli_connect($server,$username,$password,$database);

    if (!$connect) {
        echo "Connection failed :" . mysqli_connect_error();
        die();
    }
?>