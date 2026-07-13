<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$id = $_GET["id"];

$stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: users.php");
exit;