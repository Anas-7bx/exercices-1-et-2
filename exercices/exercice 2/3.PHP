<?php

$utilisateurs = array(
    "utilisateur1@gmail.com" => "utilisateur1",
    "utilisateur2@gmail.com" => "utilisateur2",
    "utilisateur3@gmail.com" => "utilisateur3"
);


if (isset($_POST['email']) && isset($_POST['motdepasse'])) {
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    
    if (array_key_exists($email, $utilisateurs) && $utilisateurs[$email] == $motdepasse) {
        
        echo "<h3>Connexion réussie ! Bienvenue, " . $email . ".</h3>";
    } else {

        echo "<h3>Erreur : Email ou mot de passe incorrect.</h3>";
    }
}
?>

<h2>Formulaire de Connexion</h2>
<form method="POST">
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="motdepasse">Mot de passe :</label><br>
    <input type="password" id="motdepasse" name="motdepasse" required><br><br>

    <input type="submit" value="Se connecter">
</form>
