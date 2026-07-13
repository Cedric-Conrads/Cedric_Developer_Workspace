<?php


session_start();

if (!isset($_SESSION["loggedIn"])) {
    header("Location: form.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Willkommen, <?php echo $_SESSION["username"]; ?>!</h1>

<P>Du bist erfolgreich eingeloggt.</P>

<a href="users.php">Benutzer verwalten</a><br>
<br><br>
<a href="logout.php">Ausloggen</a>

</body>
</html>