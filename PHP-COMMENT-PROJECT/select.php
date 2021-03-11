<?php
    include_once('connection.php');
  $comments = mysqli_query($connect,'SELECT * FROM comments ORDER BY comment_date DESC');
  while ($row = mysqli_fetch_assoc($comments)) {
  $date = strtotime($row['comment_date']);
  $date = date("d/m/Y \\a\\t H:i", $date);
  $username = $row['comment_user'];
  $message = $row['message'];
  echo "<div class='comment'>";
    echo "<p class='username'>$username</p>";
    echo "<p class='date'> $date </p>";
    echo "<p class='message'>$message</p>";
  echo "</div>";
  }
?>