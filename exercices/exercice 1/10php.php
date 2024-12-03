<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $type_compte = $_POST['type_compte'];

    
    if ($type_compte == 'administrateur') {
        echo "Bienvenue, administrateur !";
    } elseif ($type_compte == 'utilisateur') {
        echo "Bienvenue, utilisateur simple !";
    } else {
        echo "Choix invalide.";
    }
}
?>
