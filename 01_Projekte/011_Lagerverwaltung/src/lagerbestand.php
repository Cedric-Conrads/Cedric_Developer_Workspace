<?php

$connection = new mysqli('localhost', 'root', '', 'lagerverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

if (isset($_GET["suche"])) {

    $suche = $_GET["suche"];

} else {

    $suche = "";

}


$suche = "%" . $suche . "%";

$stmt = $connection->prepare("
    SELECT *
    FROM artikel
    WHERE name LIKE ? OR artikelnummer LIKE ?
");

$stmt->bind_param(
    "ss",
    $suche,
    $suche
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


<form method="get" action="lagerbestand.php"> 
   <input type="text" name="suche" placeholder="z. B. Hammer">

    <button>Suche</button> 
</form>

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

<a
    href="delete_article.php?artikelnummer=<?= $row["artikelnummer"] ?>"
    onclick="return confirm('Möchten Sie diesen Artikel wirklich löschen?');"
>
    Löschen
</a>

</td> 


        </tr>

        <?php } ?>

    </table>

</body>
</html>