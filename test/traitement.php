<!DOCTYPE html>
<html>
<head>
    <title>Résultat du formulaire</title>
</head>
<body>
    <h2>Résultat du formulaire</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nom"];
        $email = $_POST["email"];

        echo "Nom : " . $nom . "<br>";
        echo "Email : " . $email . "<br>";
    }
    ?>
</body>
</html>
