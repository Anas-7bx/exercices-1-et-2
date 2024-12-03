<?php
$villes = array(
    "khouribga" => 28,
    "Rabat" => 25,
    "Marrakech" => 32,
    "Fès" => 30,
    "Agadir" => 27
);

function villeLaPlusChaud($villes) {
    $tempMax = max($villes);
    
    $villeMax = array_search($tempMax, $villes);
    
    return array("ville" => $villeMax, "temperature" => $tempMax);
}

$villeChaud = villeLaPlusChaud($villes);

echo "<h2>Ville ayant la température la plus élevée</h2>";
echo "La ville la plus chaude est " . $villeChaud['ville'] . " avec une température de " . $villeChaud['temperature'] . "°C.";
?>
