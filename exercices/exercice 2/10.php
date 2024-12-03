<?php
session_start();


if (!isset($_SESSION['utilisateurs'])) {
    $_SESSION['utilisateurs'] = array(
        "anas7@gmail.com" => array("nom" => "anas", "role" => "Admin"),
        "habachi@gmail.com" => array("nom" => "habachi", "role" => "Utilisateur"),
    );
}

$action = $_POST['action'] ?? null;
$nom = $_POST['nom'] ?? null;
$email = $_POST['email'] ?? null;
$role = $_POST['role'] ?? null;

if ($action === "ajouter" && $email && $nom && $role) {
    $_SESSION['utilisateurs'][$email] = array("nom" => $nom, "role" => $role);
    $message = "Utilisateur ajouté avec succès.";
} elseif ($action === "modifier" && $email && isset($_SESSION['utilisateurs'][$email])) {
    if ($nom) $_SESSION['utilisateurs'][$email]['nom'] = $nom;
    if ($role) $_SESSION['utilisateurs'][$email]['role'] = $role;
    $message = "Utilisateur modifié avec succès.";
} elseif ($action === "supprimer" && $email && isset($_SESSION['utilisateurs'][$email])) {
    unset($_SESSION['utilisateurs'][$email]);
    $message = "Utilisateur supprimé avec succès.";
} else {
    $message = "Erreur : Action non valide ou utilisateur non trouvé.";
}

echo "<h1 style='text-align: center;'>Liste des Utilisateurs</h1>";
echo "<table style='margin: auto;'>";
echo "<tr><th>Email</th><th>Nom</th><th>Rôle</th></tr>";

foreach ($_SESSION['utilisateurs'] as $email => $details) {
    echo "<tr><td>$email</td><td>{$details['nom']}</td><td>{$details['role']}</td></tr>";
}

echo "</table>";
echo "<p style='text-align: center; font-size: 18px; color: green;'>$message</p>";
echo "<p style='text-align: center;'><a href='index.html'>Revenir à la page précédente</a></p>";
?>
