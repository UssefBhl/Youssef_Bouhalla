<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get" class="myform">
            <input type="email" name="email" id="email" placeholder="Email">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a message..."></textarea>
            <button type="submit" name="envoyer">Envoyer</button>
        </form>
    </div>
    <?php
        mail("asmaa.talha1998@gmail.com","Hello!!!!","hello asmaaaaaaaa !!!!!!!!!");
        // if (isset($_GET['envoyer']) && isset($_GET['email']) && isset($_GET['message'])) {
        //     $to = $_GET['email'];
        //     $message = $_GET['message'];
        //     mail($to,'Hello!!!!',$message);
        // }
    ?>
    
</body>
</html>