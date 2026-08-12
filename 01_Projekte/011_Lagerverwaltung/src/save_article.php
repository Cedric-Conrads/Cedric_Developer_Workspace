<?php

require_once "db.php";


$artikelnummer = trim($_POST['artikelnummer']);
$name = trim($_POST['name']);
$bestand = $_POST['bestand'];
$lagerort = trim($_POST['lagerort']);

if (empty ($artikelnummer))  {
    echo "Artikelnummer fehlt";
    exit;
}
if (empty ($name))  {
    echo "Name fehlt";
    exit;
}
if ($bestand < 0) {
    echo "Bestand darf nicht negativ sein.";
    exit;
}


if (empty ($lagerort))  {
    echo "Lagerort fehlt";
    exit;
}






$stmt = $connection->prepare(
    "Insert INTO artikel (artikelnummer, name, bestand, lagerort) 
    VALUES (?, ?, ?, ?)"
);

$stmt->bind_param(
"ssis",
$artikelnummer,
$name,
$bestand,
$lagerort

);

try {
    $stmt->execute();

} catch (mysqli_sql_exception $e) {

    if ($e->getCode() === 1062) {
        header("Location: index.php?status=duplicate");
        exit;
    } else {
        echo "Unbekannter Datenbankfehler.";
        exit;
    }
}