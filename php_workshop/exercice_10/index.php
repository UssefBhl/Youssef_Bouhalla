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
        for($i = 1 ; $i <= 10 ; $i++){
            if($i <> 4 && $i <> 9){
                echo "$i ";
            }
        }
        echo "<br><hr>";
        for ($j=1; $j <= 10 ; $j++) { 
            $num = 6*$j;
            echo "$num ";
            
        }
        echo "<br><hr>";
        $g = 1;
        while ($g <= 10) {
            $number = 6 * $g;
            echo "$number ";
            $g++;
        }
        echo "<br><hr>";
        for ($h=1; $h <= 100 ; $h++) {
            if ($h%3 == 0 && $h%5 == 0) {
                echo "FizzBuzz | ";
            }elseif ($h%3 == 0) {
                echo "Fizz | ";
            }elseif ($h%5 == 0) {
                echo "Buzz | ";
            }else {
                echo "$h | ";
            }
        }
    ?>
</body>
</html>