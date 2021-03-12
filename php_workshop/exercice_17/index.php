<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dictionnaire = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("\n", $dictionnaire);

    echo "the dictionnary has " . sizeof($dico) . " words in it <br>";
    $cpt = 0;
    $cpt1 = 0;
    $cpt2 = 0;
    foreach ($dico as $value) {
        if (strpos($value, "w")) {
            $cpt1++;
        }
        if (strlen($value) == 15) {
            $cpt++;
        }
        if (substr($value, -1) == "q") {
            $cpt2++;
        }
    }
    echo "the dictionnary has " . $cpt . " words in it that contain 15 letters <br>";
    echo "the dictionnary has " . $cpt1 . " words in it that contain letter \"w\"<br>";
    echo "the dictionnary has " . $cpt2 . " words in it that finish with \"q\"";

    ?>
</body>
</html>