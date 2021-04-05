<?php
    include_once('connection.php');
    session_start();
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
    <title>Log In</title>
</head>
<body>
    <div class="container" role="main">
        <p class="logo">BHL</p>
        <?php
            if (isset($_POST['login']) && isset($_POST['username']) && isset($_POST['pass'])) {
                $username = mysqli_query($connect,'SELECT username FROM user WHERE username = "' .$_POST['username'] .'"' );
                $password = mysqli_query($connect,'SELECT motdepass FROM user WHERE username = "' .$_POST['username'] .'"' );
                $pass = mysqli_fetch_assoc($password);
                $number_of_users = mysqli_num_rows($username);
                if ($_POST['username'] == 'BHL' && $_POST['pass'] == 'BHL') {
                    header('Location: admin.php');
                }elseif ($number_of_users == 0) {
                    echo "<p class='error'>the username does not exist</p>";
                }elseif ($pass['motdepass'] != $_POST['pass']) {
                    echo "<p class='error'>the password is incorrect</p>";
                }else {
                    $_SESSION['username'] = $_POST['username'];
                    header('Location: comments.php');
                }
            }
        ?>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" id="formlogin">
            <h1>Welcome back !</h1>
            <div id="userlogo">
                <img src="img/user-images.svg" alt="user">
            </div>
            <input type="text" id="username" name="username" placeholder="username">
            <div id="passlogo">
                <img src="img/padlock.svg" alt="pass">
            </div>
            <input type="password" id="pass" name="pass" placeholder="password">
            <button type="submit" name="login" id="login">Log In</button>
            <a href="signup.php" id="create">Create an account!</a>
        </form>
        
    </div>
</body>
</html>