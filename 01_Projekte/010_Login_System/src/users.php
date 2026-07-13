<?php
$connection =new mysqli("localhost", "root","", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM users");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Benutzerliste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Benutzerliste</h1>

<?php
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"];
    echo " | Username: " . $row["username"];
    echo " | <a href='edit_user.php?id=" . $row["id"] . "'>Bearbeiten</a>";
    echo " | <a href='delete_user.php?id=" . $row["id"] . "'>Löschen</a>";
    echo "<br>";
}






