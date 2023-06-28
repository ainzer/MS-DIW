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
$date = '14/07/2019';
$timestamp = strtotime(str_replace('/', '-', $date));
$weekNumber = date('W', $timestamp);

echo "Le numéro de semaine pour la date $date est : $weekNumber";
?>
<hr>
<?php
$aujourdHui = new DateTime(); // Date actuelle
$dateFinFormation = new DateTime('2023-08-28'); // Date de fin de la formation

$diff = $aujourdHui->diff($dateFinFormation);
$joursRestants = $diff->days;

echo "Il reste $joursRestants jours avant la fin de votre formation.";
?>
<hr>
<?php
$annee = 2023; // Remplacez ici par l'année que vous souhaitez vérifier

$date = date("Y-m-d", strtotime("$annee-02-29"));

if ($date === "$annee-02-29") {
    echo "L'année $annee est bissextile.";
} else {
    echo "L'année $annee n'est pas bissextile.";
}
?>
<hr>
<?php
$dateString = '32/17/2019';
$dateParts = explode('/', $dateString);
$day = intval($dateParts[0]);
$month = intval($dateParts[1]);
$year = intval($dateParts[2]);

if (checkdate($month, $day, $year)) {
    echo "La date est valide.";
} else {
    echo "La date est erronée.";
}
?>
<hr>
<?php
$heureCourante = date("H\hi");

echo "L'heure courante est : $heureCourante";
?>
<hr>
<?php
$dateCourante = new DateTime(); // Date courante

$dateCourante->add(new DateInterval('P1M')); // Ajoute 1 mois

$nouvelleDate = $dateCourante->format('d/m/Y'); // Format de la nouvelle date

echo "La date courante + 1 mois est : $nouvelleDate";
?>
<hr>
<?php
$timestamp = 1000200000;
$date = date('Y-m-d H:i:s', $timestamp);

echo "La date correspondante au timestamp 1000200000 est : $date";
?>
<hr>
</body>
</html>