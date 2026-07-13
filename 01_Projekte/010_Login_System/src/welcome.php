<?php

session_start();

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen:" . $connection->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare(
    "SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user["password"])) {
    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = $user["username"];

    header("Location: dashboard.php");
    exit;
} else {
    echo "Benutzername oder Passwort ist falsch.";
}