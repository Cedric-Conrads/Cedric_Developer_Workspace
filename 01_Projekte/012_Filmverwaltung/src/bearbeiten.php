<?php

require "db.php";

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

if (!isset($_GET["id"])) {
    die("Keine Film-ID übergeben.");
}

$id = (int) $_GET["id"];

if (isset($_POST["titel"])) {
    $titel = $_POST["titel"];
    $genre = $_POST["genre"];
    $erscheinungsjahr = $_POST["erscheinungsjahr"];
    $bewertung = $_POST["bewertung"];

    $stmt = $connection->prepare(
        "UPDATE filme
         SET titel = ?, genre = ?, erscheinungsjahr = ?, bewertung = ?
         WHERE id = ?"
    );

    $stmt->bind_param(
        "ssidi",
        $titel,
        $genre,
        $erscheinungsjahr,
        $bewertung,
        $id
    );

    $stmt->execute();

    header("Location: filmliste.php");
    exit();
}

$stmt = $connection->prepare(
    "SELECT *
     FROM filme
     WHERE id = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Film nicht gefunden.");
}

?>

<form
    method="POST"
    action="bearbeiten.php?id=<?= $id; ?>"
>
    <input
        type="text"
        name="titel"
        value="<?= htmlspecialchars($row["titel"]); ?>"
        required
    >

    <input
        type="text"
        name="genre"
        value="<?= htmlspecialchars($row["genre"]); ?>"
        required
    >

    <input
        type="number"
        name="erscheinungsjahr"
        value="<?= $row["erscheinungsjahr"]; ?>"
        required
    >

    <input
        type="number"
        name="bewertung"
        step="0.1"
        min="0"
        max="10"
        value="<?= $row["bewertung"]; ?>"
        required
    >

    <button type="submit">
        Speichern
    </button>
</form>