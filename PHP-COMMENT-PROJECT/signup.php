<?php
    include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginsignupstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>sign Up</title>
</head>
<body>
    <div class="container" role="main">
        <?php
            if (isset($_POST['signup']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['reppass'])) {
                if (strlen($_POST['username']) > 8) {
                    echo "<p>the username must be less than 9 characters</p>";
                }elseif (strlen($_POST['pass']) > 10) {
                    echo "<p>the password must be less than 11 characters</p>";
                }elseif( $_POST['pass'] != $_POST['reppass'] ){
                    echo "<p>the two passwords are not identical</p>";
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