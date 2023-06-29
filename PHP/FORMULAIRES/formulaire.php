<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hr>
    <form id="contactForm" method="POST" action="fonction-form.php">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" class="form-control mod-form" id="nom" placeholder="Entrez votre nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" class="form-control mod-form" id="prenom" placeholder="Entrez votre prénom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" class="form-control mod-form" id="email" placeholder="Entrez votre email" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone :</label>
            <input type="text" name="telephone" class="form-control mod-form" id="telephone"
                placeholder="Entrez votre numéro de téléphone" required>
        </div>
        <div class="form-group">
            <label for="demande">Votre demande :</label>
            <textarea name="demande" class="form-control mod-form" id="demande" rows="5" placeholder="Entrez votre demande"
                required></textarea>
        </div>
        <br>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary mod-btn">Envoyer</button>
        </div>
    </form>
    <hr>
</body>

</html>