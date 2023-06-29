<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les identifiants
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Vérifier si les identifiants sont corrects
    if ($login === "admin" && $password === "admin") {
        // Initialiser la variable de session
        $_SESSION["auth"] = "ok";
        header("Location: secret.php"); // Rediriger vers une autre page
        exit();
    } else {
        // Détruire la variable de session
        unset($_SESSION["auth"]);
        header("Location: login_form.php?error=1"); // Rediriger vers la page de connexion avec un message d'erreur
        exit();
    }
} else {
    // Rediriger vers la page de connexion si le formulaire n'a pas été soumis
    header("Location: login_form.php");
    exit();
}
?>
