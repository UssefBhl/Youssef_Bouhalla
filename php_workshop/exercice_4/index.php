<?php
    $bool = true;
    echo var_dump($bool) . '<br>';
    
    $bool = +$bool;
    echo var_dump($bool) . '<br>';
    // other methods
    // $bool = (int)$bool;
    // settype($bool , "integer");

    $integ = 20;
    echo var_dump($integ) . '<br>';
    $integ = strval($integ);
    echo var_dump($integ) . '<br>';

    // other methods
    // $integ = (string)$integ;
    // settype($integ , "string");

?>