<?php
// Tableau associatif avec les prix des produits
$produits = array(
    "Produit A" => 100,
    "Produit B" => 150,
    "Produit C" => 200,
    "Produit D" => 250
);

// Vérifier si le formulaire a été soumis et si des produits ont été sélectionnés
if (isset($_POST['produits']) && !empty($_POST['produits'])) {
    // Récupérer les produits sélectionnés
    $produitsSelectionnes = $_POST['produits'];

    // Calculer le prix total
    $prixTotal = 0;

    echo "<h2>Produits sélectionnés :</h2>";
    echo "<ul>";

    foreach ($produitsSelectionnes as $produit) {
        echo "<li>$produit - Prix : " . $produits[$produit] . " dh</li>";
        $prixTotal += $produits[$produit];
    }

    echo "</ul>";
    echo "<strong>Prix total : $prixTotal dh</strong>";
} else {
    // Message si aucun produit n'est sélectionné
    echo "<h2>Aucun produit sélectionné.</h2>";
}
?>
