<?php
session_start();
   if(isset($_SESSION['username'])){
        header('Location: comments.php');
    }else {
        header('Location: login.php');
    }
?>