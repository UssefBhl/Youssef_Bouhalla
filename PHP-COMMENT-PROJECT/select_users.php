<?php
    include_once('connection.php');
    $query = "SELECT * FROM user";
    $result = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['user_id'];
        $username = $row['username'];
        echo "<div class='user'>";
            echo "<p>id: $id</p>";
            echo "<p class='usern'>username: $username</p>";
            echo "<button type='button' class='btn'>Delete $username</button>";
        echo "</div>";
    }
?>