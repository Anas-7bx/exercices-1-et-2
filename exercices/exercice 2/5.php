<?php

$commentaires = array();


if (isset($_POST['commentaire']) && !empty($_POST['commentaire'])) {
    
    $commentaire = $_POST['commentaire'];
    $horodatage = date('Y-m-d H:i:s');  

    
    $commentaires[$horodatage] = $commentaire;
}

?>


<h2>Soumettre un commentaire</h2>
<form method="POST">
    <label for="commentaire">Votre commentaire :</label><br>
    <textarea id="commentaire" name="commentaire" required></textarea><br><br>
    <input type="submit" value="Soumettre">
</form>

<hr>


<h3>Commentaires soumis :</h3>
<?php
if (!empty($commentaires)) {
  
    krsort($commentaires);

    
    foreach ($commentaires as $horodatage => $commentaire) {
        echo "<p><strong>Posté le " . $horodatage . " :</strong><br>" . $commentaire . "</p>";
    }
} else {
    echo "<p>Aucun commentaire soumis.</p>";
}
?>
