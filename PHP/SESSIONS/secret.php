<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== "ok") {
    header("Location: login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page protégée</title>
</head>
<body>
    <h2>Bienvenue sur la page protégée</h2>
    <!-- Contenu de la page -->
</body>
</html>