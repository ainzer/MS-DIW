<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
</head>
<body>
  <h2>Résultat du formulaire</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $telephone = $_POST["telephone"];
  $demande = $_POST["demande"];

  echo "Nom : " . $nom . "<br>";
  echo "Prénom : " . $prenom . "<br>";
  echo "Email : " . $email . "<br>";
  echo "Téléphone : " . $telephone . "<br>";
  echo "Demande : " . $demande . "<br>";
}
?>
</body>
</html>
