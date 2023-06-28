<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('Fonction.php') ?>
</head>
<body>
    <hr>
    <?php
    echo "Exercice sur les fonction:", "\n", $resultat1;
    ?>
    <hr>
    <?php
    echo $resultat2; // Affiche 17
    ?>
    <hr>
    <?php
echo $resultat ? "true" : "false"; // Affiche "true"
?>
</body>
</html>