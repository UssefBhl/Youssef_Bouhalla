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
        <input type="text" name="nom" id="nom" placeholder="nom">
        <input type="number" name="weight" id="weight" placeholder="weight">
        <input type="number" name="heightcm" id="heightcm" placeholder="height">
        <input type="submit" name ="btnsubmit" value="enter">
    </form>
    <?php
        
        if (isset($_GET['btnsubmit'])) {

            if ($_GET['nom'] == null || $_GET['weight'] == null || $_GET['heightcm'] == null) {
                echo "please enter all required informations";
            }else {
                $name = $_GET['nom'];
                $poidsKg = (int)$_GET['weight'];
                $tailleCm = (int)$_GET['heightcm'];
                $tailleM = $tailleCm / 100;
                $taillePow2 = pow($tailleM,2);
                $BMI = $poidsKg / $taillePow2;

                echo "your name is $name, <br>your BMI is : $BMI";
            }

        }

        
    ?>
</body>
</html>