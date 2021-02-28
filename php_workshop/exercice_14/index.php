<?php
    session_start();
        if (isset($_GET['enter']) && isset($_GET['nom'])) {
            $nom = $_GET['nom'];
            setcookie("nom", $nom, time() + (60*60*24*30));
            $_SESSION['nom'] = $nom;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="nom" id="nom" placeholder="enter your name">
        <input type="submit" value="enter" name="enter">
    </form>
    <?php
        if (isset($_COOKIE['nom'])) {
            echo "the name is : " . $_COOKIE['nom'] . "<br>";
            echo "the name is : " . $_SESSION['nom'];
        }
        
    ?>
</body>
</html>