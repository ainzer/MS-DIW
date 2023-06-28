<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <?php
$file = file('fichier.txt'); // Remplacez 'liste_sites.txt' par le nom de votre fichier

// Début de la construction de la page web
$html = '<html>
<head>
<title>Liste des sites indispensables</title>
</head>
<body>
<h1>Liste des sites indispensables à la compréhension du monde moderne</h1>
<ul>';

// Parcours des lignes du fichier
foreach ($file as $line) {
    $line = trim($line); // Supprime les espaces en début et fin de ligne
    $html .= '<li><a href="' . $line . '">' . $line . '</a></li>'; // Ajoute un lien hypertexte à la liste
}

// Fin de la construction de la page web
$html .= '</ul>
</body>
</html>';

// Enregistre le contenu généré dans un fichier nommé 'liste_sites.html'
file_put_contents('liste_sites.html', $html);

echo 'Le fichier HTML a été généré avec succès !';
?>

<hr>
</body>
</html>