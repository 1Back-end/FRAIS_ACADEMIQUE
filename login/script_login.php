<?php
session_start();
include("../database/connexion.php");

$erreur_champ = "";
$erreur = "";
$succes = "";

// On récupère les données du formulaire
if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Vérifier que les champs ne sont pas vides
    if (empty($username) || empty($password)) {
        $erreur_champ = "Ce champ est requis !";
    } else {
        // Rechercher l'utilisateur dans la base de données par email ou nom d'utilisateur
        $stmt = $connexion->prepare("SELECT id, first_name, email,last_name, password FROM tlbl_users WHERE email = ? OR first_name = ?");
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch();

        // Vérifier si l'utilisateur existe
        if ($user) {
            // Vérifier le mot de passe
            if (password_verify($password, $user['password'])) {
                // Authentification réussie
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['photo'] = $user['photo'];
                // Redirection vers une page protégée ou tableau de bord
                header("Location: ../dashboard/tableau_de_bord.php");
                exit();
            } else {
                $erreur = "Mot de passe incorrect.";
            }
        } else {
            $erreur = "Utilisateur non trouvé.";
        }
    }
}
?>