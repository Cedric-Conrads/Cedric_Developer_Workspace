<?php

$connection = new mysqli('localhost', 'root', '', 'lagerverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}


$stmt = $connection->prepare(
    "Select * FROM artikel"
);
$stmt->execute();
$result = $stmt->get_result();

?>



<!DOCTYPE html>
<html lang="de">
<head>
    <title>Lagerbestand</title>
</head>

<body>

    <table>

    <tr>
            

    <th>Artikelnummer</th>

    <th>Name</th>

    <th>Bestand</th>

    <th>Lagerort</th>

    <th>Optionen</th>

    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>

  <tr>
    <td><?= $row["artikelnummer"] ?></td>
    <td><?= $row["name"] ?></td>
    <td><?= $row["bestand"] ?></td>
    <td><?= $row["lagerort"] ?></td>
    <td> 
       
    <a href="bearbeiten.php?artikelnummer=<?= $row["artikelnummer"] ?>">
        Bearbeiten
    </a>
</td> 


        </tr>

        <?php } ?>

    </table>

</body>
</html>