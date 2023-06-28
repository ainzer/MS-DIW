<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: BOUCLE</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <hr>
<?php
for ($i = 1; $i <= 150; $i += 2) {
    echo $i . " ";
}
?>
<hr>
<?php
for ($i = 0; $i < 500; $i++) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers\n";
}
?>
<hr>
<table>
        <tr>
            <th></th>
            <?php
            // En-têtes de colonnes
            for ($i = 1; $i <= 9; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Lignes du tableau
        for ($i = 1; $i <= 9; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <hr>
</body>
</html>