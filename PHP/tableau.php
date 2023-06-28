<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Tableau associatif des mois de l'année avec le nombre de jours
$mois = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);

// Affichage du tableau avant le tri
echo "<h2>Tableau avant le tri :</h2>";
echo "<table>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($mois as $nomMois => $nbJours) {
    echo "<tr><td>".$nomMois."</td><td>".$nbJours."</td></tr>";
}
echo "</table>";

// Tri du tableau selon le nombre de jours
asort($mois);

// Affichage du tableau après le tri
echo "<h2>Tableau après le tri :</h2>";
echo "<table>";
echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
foreach ($mois as $nomMois => $nbJours) {
    echo "<tr><td>".$nomMois."</td><td>".$nbJours."</td></tr>";
}
echo "</table>";
?>

</body>
</html>