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
// Lire le contenu du fichier dans un tableau
$fileContent = file('fichier.txt');

// Début de la construction de la page web
$html = '<html>';
$html .= '<head>';
$html .= '<title>Liste de liens</title>';
$html .= '</head>';
$html .= '<body>';

// Construire la liste de liens hypertextes
$html .= '<ul>';
foreach ($fileContent as $line) {
    $url = trim($line); // Supprimer les espaces en début et fin de ligne
    $html .= '<li><a href="' . $url . '">' . $url . '</a></li>';
}
$html .= '</ul>';

// Fin de la construction de la page web
$html .= '</body>';
$html .= '</html>';

// Afficher la page web
echo $html;
?>
<hr>
</body>
</html>