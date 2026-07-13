<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$result = $connection->query("SELECT * FROM notes");

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Notizen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Notizen</h1>

<form action="save_note.php" method="post">
    <input type="text" name="title" placeholder="Neue Notiz">
    <button type="submit">Speichern</button>
</form>

<h2>Gespeicherte Notizen</h2>

<?php

while ($row = $result->fetch_assoc()) {
    echo htmlspecialchars($row["title"]);
    echo " | <a href='edit_note.php?id=" . $row["id"] . "'>Bearbeiten</a>";
    echo " | <a href='delete_note.php?id=" . $row["id"] . "'>Löschen</a>";
    echo "<br>";
}

?>

</body>
</html>