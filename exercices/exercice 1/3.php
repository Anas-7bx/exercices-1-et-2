<?php
$produits = array(
    "capuche" => 249,
    "spadri" => 499,
    "pantalon" => 299
);


echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Produit</th><th>Prix (dh)</th></tr>";


foreach ($produits as $nom => $prix) {
    echo "<tr><td>" . $nom . "</td><td>" . $prix . "</td></tr>";
}

echo "</table>";
?>
