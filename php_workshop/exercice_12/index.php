<?php
    $random = rand(1,100);
    $cpt = 0;
    $bool = true;
    do {
        $nbr = readline("Entrer un nombre: ");
        $cpt++;
        if ( $nbr==$random){
            echo"Bravo";
            $bool = false;
            break;
        }
        elseif( $nbr<$random){
            echo"nombre donné trop petit \n";
        }
        elseif ($nbr>$random) {
            echo"nombre donné trop grand \n";         
        }
    } while ($nbr != $random && $cpt <= 8);
    
    if ($bool) {
        echo"désolé, le nombre était $random";
    } 
?>
