<?php
    function IsAccepted (int $age) : bool {
        if ($age >= 18 && $age <= 35) {
            return true;
        }else {
            return false;
        }
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
    <?php
        $age1 = 12;
        $age2 = 22;
        
        if (IsAccepted($age1)) {
            echo "$age1 is Accepted<br>";
        }else {
            echo "$age1 is not Accepted<br>";
        }
        if (IsAccepted($age2)) {
            echo "$age2 is Accepted";
        }else {
            echo "$age2 is not Accepted";
        }
    ?>
</body>
</html>