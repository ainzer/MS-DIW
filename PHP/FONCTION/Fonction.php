<?php
function genererLien($url, $titre) {
    return '<a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($titre) . '</a>';
}
$resultat1= genererLien("https://www.reddit.com/" , "Reddit Hug");
?>

<?php
function somme($tab) {
    $resultat = 0;
    foreach ($tab as $valeur) {
        $resultat += $valeur;
    }
    return $resultat;
}

$tab = array(4, 3, 8, 2);
$resultat2 = somme($tab);
?>

<?php
function complex_password($password) {
    // Vérification de la longueur du mot de passe
    if (strlen($password) < 8) {
        return false;
    }

    // Vérification de la présence d'au moins 1 chiffre
    if (!preg_match('/[0-9]/', $password)) {
        return false;
    }

    // Vérification de la présence d'au moins 1 majuscule et 1 minuscule
    if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
        return false;
    }

    // Toutes les conditions sont satisfaites, le mot de passe est complexe
    return true;
}
$password = "TopSecret42";
$resultat = complex_password($password);
?>


















<?php

?>