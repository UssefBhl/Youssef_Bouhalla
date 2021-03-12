<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GET</h1>
    <form action="user.php" method="get">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="submit" value="enter" name="enter">
    </form>
    <br>
    <h1>POST</h1>
    <form action="user.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="submit" value="enter" name="enter">
    </form>
    <br>
    <?php
        if (isset($_POST['submit'])) {
            echo 'BONJOUR! ' . $_POST['civil'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'];
    ?>
        <form action="index.php" method="get">
            <input type="submit" name="change" value="OK!!">
        </form>
    <?php
        }else {
    ?>
    <h1>formulaire</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <select name="civil" id="civil">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="text" name="prenom" id="prenom" placeholder="prenom">
        <input type="file" name="myfile" id="fichier">
        <input type="submit" value="enter" name="submit">
    </form>
    <?php
        }
        if (isset($_POST['submit']) && isset($_FILES['myfile'])) {
            $file = $_FILES['myfile'];
            echo $file['name'] . '<br>';
            $myfile = pathinfo($file['name']);
            
            if ( $myfile['extension'] != "pdf") {
                echo "the file is not a pdf";
            }else {
                echo "the file is a pdf";
            }
        }
        
    ?>
</body>
</html>