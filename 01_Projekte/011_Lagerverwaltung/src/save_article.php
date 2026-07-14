<?php

$artikelnummer = $_POST['artikelnummer'];
$name = $_POST['name'];
$bestand = $_POST['bestand'];
$lagerort = $_POST['lagerort'];


$connection = new mysqli('localhost', 'root', '', 'lagerverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
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

$stmt->execute();

header ("Location: index.php");

exit;