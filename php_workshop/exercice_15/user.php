<?php
if (isset($_GET['enter'])) {
    if (isset($_GET['nom']) && isset($_GET['prenom'])) {
        echo $_GET['nom'] . " " . $_GET['prenom'] . "<br>";
    }  
}
if (isset($_POST['enter'])) {
    if (isset($_POST['nom']) && isset($_POST['prenom'])) {
        echo $_POST['nom'] . " " . $_POST['prenom'] . "<br>";
    }
}

    
?>