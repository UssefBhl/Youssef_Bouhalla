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
        $mesInformation = [
            ["nom" => "Bouhalla","prenom" => "Youssef","age" => 20,"sexe" => "Homme","ville" => "Youssoufia","origin" => "Youssoufia"],
            ["nom" => "JAMAL EDDINE","prenom" => "Yassir","age" => 20,"sexe" => "Homme","ville" => "Casablanca","origin" => "Casablanca"],
            ["nom" => "lahmar","prenom" => "khadija","age" => 21,"sexe" => "femme","ville" => "Youssoufia","origin" => "Youssoufia"],
            ["nom" => "talha","prenom" => "asmaa","age" => 23,"sexe" => "femme","ville" => "Youssoufia","origin" => "Youssoufia"],
            ["nom" => "lahmam","prenom" => "Achraf","age" => 21,"sexe" => "Homme","ville" => "Youssoufia","origin" => "Youssoufia"],
        ];
        echo "<ul>";
        foreach($mesInformation as $value){
            $value += ["formation" => "dev web"];
            echo "<li><ul>";
            foreach($value as $key => $value1){
                echo "<li>$key : $value1</li>";
            }
            echo "</ul></li>";
            echo "<hr>";
        }
        echo "</ul>";
    ?>
</body>
</html>