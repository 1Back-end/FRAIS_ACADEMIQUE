<?php
include("../database/connexion.php");


function getCurrentPageName() {
    // Récupérer le nom du fichier PHP actuel sans extension
    $pageName = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    
    // Remplacer les soulignements par des espaces
    $pageName = str_replace('_', ' ', $pageName);
    
    // Capitaliser chaque mot
    $pageName = ucwords($pageName);
    
    return $pageName;
}

function obtenirRelations() {
    return [
        'pere' => 'Père',
        'mere' => 'Mère',
        'oncle' => 'Oncle',
        'tante' => 'Tante',
        'frere' => 'Frère',
        'soeur' => 'Sœur',
        'tuteur' => 'Tuteur',
        'tutrice' => 'Tutrice',
        'autre' => 'Autre'
    ];
}

function generateUuidV4() {
    $data = random_bytes(16);
    
    // Modifier les octets pour la version (4) et le variant (2)
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // version 4
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // variant
    
    // Formater en chaîne UUID
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
$uuid = generateUuidV4();



function generateRandomPassword($length = 12) {
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%&';

    $allChars = $lowerCase . $upperCase . $numbers . $specialChars;

    // Ensure the password contains at least one of each required character type
    $password = '';
    $password .= $lowerCase[rand(0, strlen($lowerCase) - 1)];
    $password .= $upperCase[rand(0, strlen($upperCase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    // Generate the remaining characters randomly
    for ($i = strlen($password); $i < $length; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    // Shuffle the generated password to ensure randomness
    $password = str_shuffle($password);

    return $password;
}

function generateSixDigitToken() {
    return str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
}
$token = generateSixDigitToken();


function generateSchoolYear($year = null) {
    // Si aucune année n'est fournie, utilisez l'année actuelle
    if ($year === null) {
        $year = (int)date('Y');
    }

    // Déterminez l'année scolaire précédente si le mois actuel est avant septembre
    $currentMonth = (int)date('m');
    if ($currentMonth < 9) {
        $year--;
    }

    // Format de l'année scolaire : 2023-2024
    $startYear = $year;
    $endYear = $year + 1;

    return sprintf('%d-%d', $startYear, $endYear);
}

$schoolYear = generateSchoolYear();

function getFrenchMonths() {
    // Tableau contenant les noms des mois en français
    $months = [
        'Janvier',
        'Février',
        'Mars',
        'Avril',
        'Mai',
        'Juin',
        'Juillet',
        'Août',
        'Septembre',
        'Octobre',
        'Novembre',
        'Décembre'
    ];

    return $months;
}
// Exemple d'utilisation
$months = getFrenchMonths();


function generateMatricule($prefix = "EL", $length = 10) {
    // Obtenir l'année en cours
    $year = date("Y");

    // Générer un nombre aléatoire unique pour l'étudiant
    $uniqueId = strtoupper(bin2hex(random_bytes($length/2)));

    // Créer le matricule en combinant le préfixe, l'année, et l'identifiant unique
    $matricule = $prefix . $year . $uniqueId;

    return $matricule;
}

// Exemple d'utilisation
$nouveauMatricule = generateMatricule();

function generatePaymentCode($length = 12) {
    $chars = 'ABCDEFGHI0123456789'; // Caractères autorisés
    $code = '';
    $charsLength = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $code .= $chars[random_int(0, $charsLength - 1)];
    }

    return $code;
}
$paymentCode = generatePaymentCode();

function recupererAdmins($connexion) {
    // Préparer la requête SQL pour récupérer les administrateurs non supprimés
    $sql = "SELECT id AS id_user, first_name AS Nom, last_name AS Prénom, address AS Adresse, contact_number AS Contact, email AS Email 
            FROM tlbl_users 
            WHERE is_deleted = FALSE AND role = 1 ORDER BY date_added DESC"; // Supposons que le rôle 1 correspond aux administrateurs

    // Exécuter la requête SQL
    $stmt = $connexion->prepare($sql);
    $stmt->execute();

    // Récupérer les résultats
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$admins = recupererAdmins($connexion);

?>