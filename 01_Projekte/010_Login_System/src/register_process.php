<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$passwordConfirm = trim($_POST["password_confirm"]);

if ($username === "" || $password === "" || $passwordConfirm === "") {
    die("Bitte alle Felder ausfüllen.<br><a href='form.php'>Zurück</a>");
}

if (strlen($password) < 6) {
    die("Passwort muss mindestens 6 Zeichen lang sein.<br><a href='form.php'>Zurück</a>");
}

if ($password !== $passwordConfirm) {
    die("Die Passwörter stimmen nicht überein.<br><a href='form.php'>Zurück</a>");
}

$stmt = $connection->prepare(
    "SELECT * FROM users WHERE username = ?"
);

$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    die("Benutzername existiert bereits.<br><a href='form.php'>Zurück</a>");
}

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $connection->prepare(
    "INSERT INTO users (username, password) VALUES (?, ?)"
);

$stmt->bind_param("ss", $username, $passwordHash);

if ($stmt->execute()) {
    echo "Registrierung erfolgreich. Du kannst dich jetzt einloggen.";
    echo "<br><a href='form.php'>Zurück zum Login</a>";
} else {
    echo "Fehler: " . $connection->error;
}