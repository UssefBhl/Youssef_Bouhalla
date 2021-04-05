<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<p>la date courante est : " . date("d/m/Y") . "</p>";
    echo "<p>la date courante est : " . date("d-n-Y") . "</p>";
    echo "<p>la date courante est : " . date("l d F Y") . "</p>";
    $date1 = mktime(15,00,00,8,02,2020);
    echo "<p>la date est : " . date("l d M Y" , $date1) . "</p>";
    $date2 = mktime(00,00,00,05,16,2020);
    $number_of_days = ceil((time()-$date2) /60/60/24);
    echo "<p>there is " . $number_of_days ." days from " . date("d/m/Y" , $date2) . " to " . date("d/m/Y") . "</p>";
    echo "<p>there is " . cal_days_in_month(CAL_GREGORIAN, 2, 2020) . " days in february 2020</p>";

    $dateplus20 = strtotime("+20 days");
    $dateminus20 = strtotime("-20 days");

    echo "<p>TODAY : " . date("d/m/Y") ."</p>";
    echo "<p>+20 days : " . date("d/m/Y", $dateplus20) ."</p>";
    echo "<p>-20 days : " . date("d/m/Y", $dateminus20) ."</p>";
?>
</body>
</html>