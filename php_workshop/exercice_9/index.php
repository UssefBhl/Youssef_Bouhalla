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
        $taches = [
            "tache1" => ["title" => "title1","due" => "22 january","name" => "Youssef","assigned_to" => "ahmed","done" => true],
            "tache2" => ["title" => "title2","due" => "12 february","name" => "Youssef","assigned_to" => "khadija","done" => true],
            "tache3" => ["title" => "title3","due" => "20 june","name" => "Youssef","assigned_to" => "achraf","done" => false],
            "tache4" => ["title" => "title4","due" => "09 may","name" => "Youssef","assigned_to" => "yassir","done" => true],
            "tache5" => ["title" => "title5","due" => "27 november","name" => "Youssef","assigned_to" => "asmaa","done" => false],
        ];
        echo "<ul>";
        foreach($taches as $key => $value){
            echo "<li style='list-style-type:none'><h1>$key</h1></li>";
            echo "<li style='list-style-type:none'><ul>";
            foreach($value as $key1 => $value1){
                if($key1 == "done" && $value1){
                    $value1 = "Done";
                }elseif($key1 == "done" && !$value1){
                    $value1 = "Doing";
                }
                echo "<li> $key1 : $value1</li>";
            }
            echo "</ul></li>";
        }
        echo "</ul>";
    ?>
</body>
</html>