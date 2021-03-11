<?php
session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/comments.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".comments").load('select.php');
        });   
    </script>
    <script>
            $(document).on('submit','#formcomment',function (e) {
                e.preventDefault();
                        var user = $("#user").text();
                        var comment = $("#comment").val();
                        $.ajax({
                            url:'insert.php',
                            method:'POST',
                            data:{
                                user: user,
                                comment: comment
                            },
                            success:function(data){
                                $(".comments").load('select.php');
                                $('#comment').val('');
                            }
                        });
            });
    </script>
    <title>comment section</title>
</head>
<body>
    <div class="container" role="main">
        
        <p id="logo">BHL</p>
        <div class="comment_section">
            <div class="comments">
                
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="formcomment">
                <textarea name="comment" id="comment" cols="40" rows="1" placeholder="Write a comment ..."></textarea>
                <button type="submit" name="send" id="send">
                    <img src="img/send.svg" alt="send" width="27" height="24">
                </button>
            </form>
        </div>
        <form class="profile" method="post" id="formlogout">
            <img src="img/thumb-1920-764519.jpg" alt="profile" width="50" height="50" id="prfimg">
            <p id="user"><?php echo $_SESSION['username']; ?></p>
            <button type="submit" name="logout" id="logout">Log out</button>
        </form>
    </div>
</body>
</html>