<?php
    include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_signup_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>sign Up</title>
</head>
<body>
    <div class="container" role="main">
        <p class="logo">BHL</p>
        <?php

            if (isset($_POST['signup']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['reppass'])) {
                
                $usename_len = strlen($_POST['username']);
                $pass_len = strlen($_POST['pass']);
                $username = $_POST['username'];
                $query = "SELECT username FROM user WHERE username = '$username'";
                $result = mysqli_query($connect,$query);
                $number_of_rows = mysqli_num_rows($result);
                if ($number_of_rows != 0) {
                    echo "<p class='error'>this username already exist</p>";
                }elseif ($usename_len > 8 && $usename_len < 3) {
                    echo "<p class='error'>the username must be between 3 and 8 characters</p>";
                }elseif ($pass_len > 10 && $pass_len < 3) {
                    echo "<p class='error'>the password must be between 3 and 10 characters</p>";
                }elseif( $_POST['pass'] != $_POST['reppass'] ){
                    echo "<p class='error'>the two passwords are not identical</p>";
                }else {
                    mysqli_query($connect, 'INSERT INTO user ( username,motdepass) VALUES( "'.$_POST['username'].'","' . $_POST['pass'] . '")');
                    header('Location: login.php');
                }
            }
        ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="formsignup">
            <h1>Create an account !</h1>
            <div id="userlogo">
                <img src="img/user-images.svg" alt="user">
            </div>
            <input type="text" id="username" name="username" placeholder="username">
            <div id="passlogo">
                <img src="img/padlock.svg" alt="pass">
            </div>
            <input type="password" id="pass" name="pass" placeholder="password">
            <div id="reppasslogo">
                <img src="img/synchronize.svg" alt="reppass">
            </div>
            <input type="password" id="reppass" name="reppass" placeholder="repeat password">
            <button type="submit" name="signup" id="signup">SignUp</button>
            <a href="login.php" id="already">You have an account? LogIn</a>
        </form>
    </div>
</body>
</html>