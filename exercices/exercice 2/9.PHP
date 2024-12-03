<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats des étudiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Moyennes des étudiants</h1>

    <?php
    $etudiants = array(
        "adnane" => array("php" => 15, "c++" => 12, "électronique" => 14),
        "anas" => array("php" => 18, "c++" => 16, "électronique" => 17),
        "Yassine" => array("php" => 10, "c++" => 8, "électronique" => 9),
        "ilyas" => array("php" => 19, "c++" => 17, "électronique" => 18)
    );

    function calculerMoyenne($notes) {
        $total = array_sum($notes);
        $nbMatieres = count($notes);
        return $total / $nbMatieres;
    }

    echo "<table>";
    echo "<tr><th>Nom</th><th>Notes</th><th>Moyenne</th></tr>";

    foreach ($etudiants as $nom => $notes) {
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>";
        foreach ($notes as $matiere => $note) {
            echo "$matiere: $note<br>";
        }
        echo "</td>";
        $moyenne = calculerMoyenne($notes);
        echo "<td>" . number_format($moyenne, 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
