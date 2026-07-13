<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$id = $_POST["id"];
$title = trim($_POST["title"]);

if ($title === "") {
    die("Notiz darf nicht leer sein.<br><a href='notes.php'>Zurück</a>");
}

$stmt = $connection->prepare("UPDATE notes SET title = ? WHERE id = ?");
$stmt->bind_param("si", $title, $id);
$stmt->execute();

header("Location: notes.php");
exit;