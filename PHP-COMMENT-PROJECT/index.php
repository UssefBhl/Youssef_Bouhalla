<?php
    include_once('connection.php');
    $query = 'SELECT username FROM user';
    $result = mysqli_query($connect, $query);
    
    while ($resultarray = mysqli_fetch_row($result)) {
        echo $resultarray[0];
    }
    
    
?>