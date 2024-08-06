<?php

function generateUuidV4() {
    $data = random_bytes(16);
    
    // Modifier les octets pour la version (4) et le variant (2)
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // version 4
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // variant
    
    // Formater en chaîne UUID
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
$uuid = generateUuidV4();



function generateSecurePassword($length = 12) {
    if ($length < 12) {
        throw new InvalidArgumentException('Le mot de passe doit avoir une longueur d\'au moins 12 caractères.');
    }

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%&';
    
    // Assurez-vous que le mot de passe contient au moins un caractère de chaque type
    $password = [
        $lowercase[random_int(0, strlen($lowercase) - 1)],
        $uppercase[random_int(0, strlen($uppercase) - 1)],
        $numbers[random_int(0, strlen($numbers) - 1)],
        $specialChars[random_int(0, strlen($specialChars) - 1)],
    ];
    
    // Remplir le reste du mot de passe avec des caractères aléatoires
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;
    $remainingLength = $length - count($password);
    
    for ($i = 0; $i < $remainingLength; $i++) {
        $password[] = $allChars[random_int(0, strlen($allChars) - 1)];
    }

    // Mélanger les caractères pour assurer une distribution aléatoire
    shuffle($password);

    return implode('', $password);
}
$password = generateSecurePassword();


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



?>