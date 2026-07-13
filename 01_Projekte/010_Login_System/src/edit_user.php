<?php

$connection = new mysqli("localhost", "root", "", "login_system");

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}

$id = $_GET["id"];

$stmt = $connection->prepare(
    "SELECT * FROM users WHERE id = ?"
);

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
    <title>User bearbeiten</title>
</head>
<body>

<h1>User bearbeiten</h1>

<form action="update_user.php" method="post">

    <input type="hidden" name="id"
           value="<?php echo $user["id"]; ?>">

    <input type="text"
           name="username"
           value="<?php echo $user["username"]; ?>">

    <button type="submit">
        Speichern
    </button>

</form>

</body>
</html>