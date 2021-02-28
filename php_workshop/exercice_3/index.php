<?php
    $monNom = "Bouhalla";
    $monPrenom = "Youssef";
    $monAge = 20;

    // double quote
    echo "nom : $monNom | prenom : $monPrenom | age  : $monAge <br>";
    // single quote
    echo "<hr>";
    echo 'nom : ' . $monNom . ' | prenom : ' . $monPrenom . ' | age : ' . $monAge . '<br>';

    // heredoc
    $here = <<<TEST
        nom : $monNom
        prenom : $monPrenom
        age : $monAge
    TEST;
    // nowdoc
    $now = <<<'TEST'
        nom : $monNom
        prenom : $monPrenom
        age : $monAge
    TEST;
    echo "<hr>";
    echo nl2br($here). '<br>';
    echo "<hr>";
    echo nl2br($now);
    
?>