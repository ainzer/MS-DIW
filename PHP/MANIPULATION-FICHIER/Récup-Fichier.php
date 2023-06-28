<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <hr>
<?php
// Récupération du contenu du fichier distant
$file_url = 'https://ncode.amorce.org/customers.csv';
$file_content = file($file_url);

// Création du tableau HTML
$table_html = '<table class="table table-bordered">';
$table_html .= '<thead><tr><th>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>City</th><th>State</th></tr></thead>';
$table_html .= '<tbody>';

// Parcours des lignes du fichier
foreach ($file_content as $line) {
    // Découpage de la ligne en utilisant la virgule comme séparateur
    $data = explode(',', $line);

    // Récupération des valeurs individuelles
    $surname = $data[0];
    $firstname = $data[1];
    $email = $data[2];
    $phone = $data[3];
    $city = $data[4];
    $state = $data[5];

    // Ajout d'une ligne dans le tableau HTML avec les données
    $table_html .= '<tr><td>' . $surname . '</td><td>' . $firstname . '</td><td>' . $email . '</td><td>' . $phone . '</td><td>' . $city . '</td><td>' . $state . '</td></tr>';
}

$table_html .= '</tbody></table>';

// Affichage du tableau HTML
echo $table_html;
?>
<hr>
</body>
</html>