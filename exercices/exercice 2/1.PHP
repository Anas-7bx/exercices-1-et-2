<?php

$employes = array(
    "employe1" => array("nom" => "MOHAMMED", "poste" => "Développeur", "salaire" => 20000),
    "employe2" => array("nom" => "ILYAS", "poste" => "Manager", "salaire" => 17000),
    "employe3" => array("nom" => "ADNANE", "poste" => "Designer", "salaire" => 1500),
    "employe4" => array("nom" => "YASSINE", "poste" => "Responsable", "salaire" => 16000),
    "employe5" => array("nom" => "ZAKARIA", "poste" => "Analyste", "salaire" => 20000)
);


function calculerSalaireMoyen($employes) {
    $totalSalaire = 0;
    $nombreEmployes = count($employes);

    
    foreach ($employes as $employe) {
        $totalSalaire += $employe['salaire'];
    }

    
    return $totalSalaire / $nombreEmployes;
}


echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Nom</th><th>Poste</th><th>Salaire</th></tr>";

foreach ($employes as $employe) {
    echo "<tr><td>" . $employe['nom'] . "</td><td>" . $employe['poste'] . "</td><td>" . $employe['salaire'] . "</td></tr>";
}

echo "</table>";


$salaireMoyen = calculerSalaireMoyen($employes);


echo "<br><strong>Salaire moyen des employés : </strong>" . $salaireMoyen . " dh";
?>
