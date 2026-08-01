<?php

require "db.php";

$titel = $_POST['titel'];
$genre = $_POST['genre'];
$erscheinungsjahr = $_POST['erscheinungsjahr'];
$bewertung = $_POST['bewertung'];

$connection = new mysqli(
    'localhost',
    'root',
    '',
    'Filmverwaltung'
);

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$stmt = $connection->prepare(
    "INSERT INTO filme (titel, genre, erscheinungsjahr, bewertung)
     VALUES (?, ?, ?, ?)"
);

if (!$stmt) {
    die("Prepare fehlgeschlagen: " . $connection->error);
}

$stmt->bind_param(
    "ssid",
    $titel,
    $genre,
    $erscheinungsjahr,
    $bewertung
);

if (!$stmt->execute()) {
    
    die("Execute fehlgeschlagen: " . $stmt->error);
}

header("Location: index.php");
exit();