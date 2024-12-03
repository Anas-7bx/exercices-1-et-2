<?php
if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
    
    $fichier = $_FILES['fichier']['tmp_name'];

    
    if (($handle = fopen($fichier, "r")) !== FALSE) {
        
        $produits = array();

        
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

            $produits[] = array(
                "nom" => $data[0],    
                "prix" => $data[1],    
                "quantite" => $data[2] 
            );
        }

       
        fclose($handle);

        
        echo "<h2>Liste des produits</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Nom</th><th>Prix</th><th>Quantité</th></tr>";

       
        foreach ($produits as $produit) {
            echo "<tr><td>" . htmlspecialchars($produit['nom']) . "</td><td>" . htmlspecialchars($produit['prix']) . "</td><td>" . htmlspecialchars($produit['quantite']) . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Erreur lors de l'ouverture du fichier.</p>";
    }
} else {
    echo "<p>Aucun fichier n'a été téléchargé ou une erreur est survenue.</p>";
}
?>
