<?php

$employes = array(
    "MOHAMMED" => array("poste" => "Développeur", "salaire" => 20000),
    "ILYAS" => array("poste" => "Manager", "salaire" => 17000),
    "ADNANE" => array("poste" => "Designer", "salaire" => 1500),
    "YASSINE" => array("poste" => "Responsable", "salaire" => 16000),
    "ZAKARIA" => array("poste" => "Analyste", "salaire" => 20000)
);


if (isset($_POST['nom'])) {
    $nomRecherche = $_POST['nom'];

    
    if (array_key_exists($nomRecherche, $employes)) {
        $employe = $employes[$nomRecherche];
        
        echo "<h3>Informations sur l'employé :</h3>";
        echo "Nom : " . $nomRecherche . "<br>";
        echo "Poste : " . $employe['poste'] . "<br>";
        echo "Salaire : " . $employe['salaire'] . " dh<br>";
    } else {
        
        echo "<h3>Aucun employé trouvé avec ce nom.</h3>";
    }
}
?>


<h2>Recherche d'un employé</h2>
<form method="POST">
    <label for="nom">Entrez le nom de l'employé :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>
    <input type="submit" value="Rechercher">
</form>
