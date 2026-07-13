<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$id = $_GET["id"];

$stmt = $connection->prepare("SELECT * FROM notes WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$note = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Notiz bearbeiten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Notiz bearbeiten</h1>

<form action="update_note.php" method="post">
    <input type="hidden" name="id" value="<?php echo $note["id"]; ?>">
    <input type="text" name="title" value="<?php echo htmlspecialchars($note["title"]); ?>">
    <button type="submit">Speichern</button>
</form>

<a href="notes.php">Zurück</a>

</body>
</html>