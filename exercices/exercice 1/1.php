<?php
$etudiant = array(
    "nom" => "habachi",
    "prenom" => "anas",
    "matricule" => "1923"
);

$etudiant['note'] = 10; 

$etudiant['note'] = 13; 


echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Clé</th><th>étudiant</th></tr>";


foreach ($etudiant as $clé => $étudiant) {
    echo "<tr><td>" . ucfirst($clé) . "</td><td>" . $étudiant . "</td></tr>";
}

echo "</table>";
?>
