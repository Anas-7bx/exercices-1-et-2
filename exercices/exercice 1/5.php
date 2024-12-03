<?php
$pays = array(
    "Maroc" => 36910560,
    "Allemagne" => 83166711,
    "France" => 67364357
);

arsort($pays); 
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Pays</th>
        <th>Population</th>
    </tr>
    <?php
    foreach ($pays as $nom => $population) {
        echo "<tr>";
        echo "<td>" . $nom . "</td>";
        echo "<td>" . $population . "</td>";
        echo "</tr>";
    }
    ?>
</table>
