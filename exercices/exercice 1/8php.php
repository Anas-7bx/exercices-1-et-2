<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $couleur = $_POST['couleur'];

    
    echo "Votre couleur préférée est : $couleur .";
}
?>
