<?php

require "db.php";

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

if (isset($_GET["suche"])) {

    $suche = $_GET["suche"];

} else {

    $suche = "";

}

$suche = "%" . $suche . "%";

$stmt = $connection->prepare(
   "SELECT *
    FROM filme
    WHERE titel LIKE ? OR genre LIKE ?
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
    <title>Filmliste</title>


</head>

<body>


<form method="get" action="filmliste.php"> 
   <input type="text" name="suche" placeholder="z. B. Action">

    <button>Suche</button>

</form>

<table>

<tr>
    <th>Titel</th>
    <th>Genre</th>
    <th>Erscheinungsjahr</th>
    <th>Bewertung</th>
    <th>Optionen</th>

    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>

    <tr>
        <td><?= $row["titel"]; ?></td>
        <td><?= $row["genre"]; ?></td>
        <td><?= $row["erscheinungsjahr"]; ?></td>
        <td><?= $row["bewertung"]; ?></td>
        <td>
            <a href="bearbeiten.php?id=<?= $row["id"]; ?>">Bearbeiten</a>
            <a href="loeschen.php?id=<?= $row["id"]; ?>" onclick="return confirm('Sind Sie sicher, dass Sie diesen Film löschen möchten?');">Löschen</a>
        </td>

    </tr>

    <?php endwhile; ?>

    </table>

    </body>
</html>


