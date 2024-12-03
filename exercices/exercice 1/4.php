<?php
$scores = array(
    "Etudiant 1" => 15,
    "Etudiant 2" => 12,
    "Etudiant 3" => 18,
    "Etudiant 4" => 14,
    "Etudiant 5" => 16
);

$moyenne = array_sum($scores) / count($scores);
echo "Moyenne des scores: " . $moyenne . "<br>";
?>
