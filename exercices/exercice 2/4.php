<?php

$panier = array(
    "Produit1" => array("quantité" => 2, "prix" => 49),  
    "Produit2" => array("quantité" => 1, "prix" => 129),  
    "Produit3" => array("quantité" => 3, "prix" => 10)   
);


$total = 0;
foreach ($panier as $produit => $details) {
    $total += $details["quantité"] * $details["prix"];
}


echo "<h2>Votre Panier</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nom du produit</th><th>Quantité</th><th>Prix unitaire</th><th>Total produit</th></tr>";

foreach ($panier as $produit => $details) {
    $totalProduit = $details["quantité"] * $details["prix"];
    echo "<tr><td>" . $produit . "</td><td>" . $details["quantité"] . "</td><td>" . $details["prix"] . " dh</td><td>" . $totalProduit . " dh</td></tr>";
}

echo "</table>";


echo "<br><strong>Total du panier : </strong>" . $total . " dh";
?>
