<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nom = $_POST['nom'];
    $age = $_POST['age'];

    
    if (is_numeric($age) && $age > 0) {
        echo "Bienvenue, $nom ! Vous avez $age ans.";
    } else {
        echo "Erreur : L'âge doit être supérieur à 0.";
    }
}
?>
