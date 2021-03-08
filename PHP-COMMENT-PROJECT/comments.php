<?php
    include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/commentstyle.css">
    <title>comment section</title>
</head>
<body>
    <div class="container" role="main">
        <div class="comment_section">
            <div class="comments">
                
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>">
                <textarea name="comment" id="comment" cols="40" rows="1" placeholder="Write a comment ..."></textarea>
                <button type="submit" name="send" id="send">
                    <img src="img/send.svg" alt="send" width="27" height="24">
                </button>
            </form>
        </div>
    </div>
</body>
</html>