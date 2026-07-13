<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$id = $_POST["id"];
$username = $_POST["username"];

$stmt = $connection->prepare(
    "UPDATE users SET username = ? WHERE id = ?"
);

$stmt->bind_param("si", $username, $id);

$stmt->execute();

header("Location: users.php");
exit;