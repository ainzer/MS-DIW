<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>
    <h2>Formulaire PHP</h2>
    <form method="POST" action="traitement.php">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
