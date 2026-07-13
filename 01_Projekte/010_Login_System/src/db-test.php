<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen");
}

echo "Datenbank verbunden!";

$result = $connection->query("SELECT * FROM users WHERE username = 'Peter'");

$user = $result->fetch_assoc();

if ($user) {
    echo "<br><br>User gefunden:";
    echo "<br>ID: " . $user["id"];
    echo "<br>Username: " . $user["username"];
    echo "<br>Password: " . $user["password"];
} else {
    echo "<br><br>Kein Benutzer gefunden.";
}