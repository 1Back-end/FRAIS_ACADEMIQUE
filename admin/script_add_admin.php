<?php
include("../controllers/controllers.php");
include("../database/connexion.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$erreur_champ = "";
$succes = "";
$erreur = "";

if (isset($_POST["submit"])) {
    $nom = $_POST['nom'] ?? null;
    $prenom = $_POST['prenom'] ?? null;
    $email = $_POST['email'] ?? null;
    $adresse = $_POST['adresse'] ?? null;
    $telephone = $_POST['telephone'] ?? null;
    $photo = $_FILES['photo'] ?? null;
    $id = generateUuidV4();
    $password = generateRandomPassword();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hachage du mot de passe
    $annee = generateSchoolYear();
    $role = 1;
    $added_by = $_SESSION['user_id']; // Remplacer par l'identifiant de l'utilisateur actuel si nécessaire

    // Vérifier que tous les champs requis sont remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($adresse) || empty($telephone)) {
        $erreur_champ = "Ce champ est requis !";
    } else {
        // Vérifier si l'email existe déjà dans la base de données
        $stmt = $connexion->prepare("SELECT COUNT(*) FROM tlbl_users WHERE email = ?");
        $stmt->execute([$email]);
        $email_exists = $stmt->fetchColumn();

        if ($email_exists > 0) {
            $erreur = "L'adresse email est déjà utilisée.";
        } else {
            // Traitement de l'upload de la photo
            $photo_name = null;
            if ($photo && $photo['error'] == UPLOAD_ERR_OK) {
                $photo_ext = strtolower(pathinfo($photo['name'], PATHINFO_EXTENSION));
                if (in_array($photo_ext, ['jpg', 'png'])) {
                    // Définir le nom du fichier photo
                    $photo_name = uniqid() . '.' . $photo_ext;
                    $photo_path = '../uploads/' . $photo_name;
                    move_uploaded_file($photo['tmp_name'], $photo_path);
                } else {
                    $erreur = "Le format de la photo n'est pas valide. Seuls les fichiers JPG et PNG sont autorisés.";
                }
            }

            // Insérer les données dans la base de données
            if (empty($erreur_champ) && empty($erreur)) {
                $stmt = $connexion->prepare("INSERT INTO tlbl_users (id, first_name, last_name, email, password, photo, address, contact_number, birthplace, role, annee, added_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->execute([$id, $prenom, $nom, $email, $hashed_password, $photo_name, $adresse, $telephone, $birthplace ?? null, $role, $annee, $added_by]);

                // Envoi de l'email avec les informations de connexion
                $mail = new PHPMailer(true);
                try {
                    // Paramètres du serveur SMTP
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Remplacez par votre serveur SMTP
                    $mail->SMTPAuth = true;
                    $mail->Username = 'laurentalphonsewilfried@gmail.com'; // Remplacez par votre adresse e-mail
                    $mail->Password = 'ztgs elyg jaxy emnx'; // Remplacez par votre mot de passe e-mail
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port       = 587;

                    // Destinataire
                    $mail->setFrom('laurentalphonsewilfried@gmail.com', 'Laurent Alphonse');
                    $mail->addAddress($email, "$prenom $nom");

                    // Chargement du modèle HTML
                    $template = file_get_contents('email_template.html');
                    $template = str_replace(['{FIRST_NAME}', '{EMAIL}', '{PASSWORD}'], [$prenom, $email, $password], $template);

                    // Contenu
                    $mail->isHTML(true);
                    $mail->Subject = 'Votre compte a été créé';
                    $mail->CharSet = 'UTF-8';
                    $mail->Body    = $template;

                    $mail->send();
                    $succes = "L'administrateur a été enregistré avec succès et un email a été envoyé.";
                } catch (Exception $e) {
                    $erreur = "Le message n'a pas pu être envoyé. Erreur : {$mail->ErrorInfo}";
                }
            }
        }
    }
}
?>
