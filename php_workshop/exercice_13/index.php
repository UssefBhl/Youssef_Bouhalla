<?php
 // --function factorielle------
 function factorielle(int $number):int{
    $fact = 1;
    for ($i=1; $i <= $number ; $i++) { 
        $fact = $fact * $i;
    }
    return $fact;
}
// --function somme------
function somme():int{
    $number_of_args = func_num_args();
    $somme = 0;
    if ($number_of_args > 1) {
        for ($i=0; $i < $number_of_args ; $i++) {
            $somme = $somme + func_get_arg($i);
        }
    }
    return $somme;
}
// --function nombrePremier------
    // $bool = true;
    // for ($i = 2; $i < $nbr; $i++) {
    //     if ($nbr % $i == 0) {
    //         $bool = false;
    //     }
    // }
    // if ($bool) {
    //     return true;
    // }else {
    //     return false;
    // }
function nombrePremier(int $nbr):bool{
    
    if ($nbr == 1) {
       return false;
    }else {
        if ($nbr%2 == 0 && $nbr != 2) {
            return false;
        }else {
            return true;
        }
    }
}
// --function performOperation------
function performOperation($operation){
    // GETTING NUMBER OF ARGUMENTS
    $number_of_args = func_num_args();
    // CALLING FACTORIELLE FUNCTION
    if ($operation == "factorielle" && $number_of_args > 1 && $number_of_args <= 2) {
        return call_user_func($operation,func_get_arg(1));
    }

    // CALLING NOMBREPREMIER FUNCTION
    if ($operation == "nombrePremier" && $number_of_args > 1 && $number_of_args <= 2) {
        return call_user_func($operation, func_get_arg(1));
    }

    // CALLING SOMME FUNCTION
    $numbers = func_get_args();
    unset($numbers[0]);

    if ($operation == "somme" && sizeof($numbers) >= 2) {
        return call_user_func_array($operation,$numbers);
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
    <form action="index.php" method="get">
    <input type="number" name ="nbr" placeholder= "enter a number">
    <input type="submit" value="factorielle" name="fact">
    <input type="submit" value="nombre Premier" name="nombreP">
    </form>
    <?php
        // --TEST------
        if (isset($_GET['fact'])) {
            if (isset($_GET['nbr'])) {
                $number = (int)$_GET['nbr'];
                echo "the fact of $number is " . performOperation("factorielle" , $number) ;
            }
        }
        
        if (isset($_GET['nombreP'])) {
            if (isset($_GET['nbr'])) {
                $number = (int)$_GET['nbr'];
                if (performOperation("nombrePremier" , $number)) {
                    echo "$number is a primitive number";
                }else {
                    echo "$number is not a primitive number";
                }
            }
        }
    ?>
    <p>please add "+" between your numbers!</p>
    <form action="index.php" method="get">
    <input type="text" name ="nbrs" placeholder= "enter your numbers">
    <input type="submit" value="somme" name="somme">
    </form>
    <?php
        if (isset($_GET['somme'])) {
            if (isset($_GET['nbrs'])) {
                $numbers = $_GET['nbrs'];
                $nbrs = explode("+" , $numbers);
                for ($i=0; $i < sizeof($nbrs)  ; $i++) { 
                    $nbrs[$i] = +$nbrs[$i];
                }
                echo "somme = " . performOperation("somme",...$nbrs);
            }
        }
    ?>
</body>
</html>