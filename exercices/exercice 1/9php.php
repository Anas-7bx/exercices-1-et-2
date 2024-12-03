<?php

if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    
    $nombre1 = $_GET['nombre1'];
    $nombre2 = $_GET['nombre2'];

   
    $somme = $nombre1 + $nombre2;

   
    echo "La somme est : $somme.";
} else {
    echo "Veuillez entrer deux nombres.";
}
?>
