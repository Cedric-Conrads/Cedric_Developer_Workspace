<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$title = trim($_POST["title"]);

if ($title === "") {
    die("Bitte eine Notiz eingeben.<br><a href='notes.php'>Zurück</a>");
}

$stmt = $connection->prepare("INSERT INTO notes (title) VALUES (?)");
$stmt->bind_param("s", $title);
$stmt->execute();

header("Location: notes.php");
exit;