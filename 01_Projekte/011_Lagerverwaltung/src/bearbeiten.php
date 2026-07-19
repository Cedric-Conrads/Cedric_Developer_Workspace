<?php

$connection = new mysqli('localhost', 'root', '', 'lagerverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$artikelnummer = $_GET["artikelnummer"];

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $bestand = $_POST["bestand"];
    $lagerort = $_POST["lagerort"];

    $stmt = $connection->prepare(
        "UPDATE artikel
         SET name = ?, bestand = ?, lagerort = ?
         WHERE artikelnummer = ?"
    );

    $stmt->bind_param(
        "siss",
        $name,
        $bestand,
        $lagerort,
        $artikelnummer
    );

    $stmt->execute();
}

$stmt = $connection->prepare(
    "SELECT *
     FROM artikel
     WHERE artikelnummer = ?"
);

$stmt->bind_param("s", $artikelnummer);

$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_assoc();

?>




<form
    method="POST"
    action="bearbeiten.php?artikelnummer=<?= $artikelnummer; ?>"
>
    <input
        type="text"
        name="name"
        value="<?= $row["name"]; ?>"
    >

    <input
        type="number"
        name="bestand"
        value="<?= $row["bestand"]; ?>"
    >

    <input
        type="text"
        name="lagerort"
        value="<?= $row["lagerort"]; ?>"
    >

    <button type="submit">
        Speichern
    </button>
</form>