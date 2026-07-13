<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    
    <title>Login-System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Login</h1>

<form action="welcome.php" method="post">
    <input type="text" name="username" placeholder="Benutzername">
    <input type="password" name="password" placeholder="Passwort">
    <button type="submit">Einloggen</button>
</form>

<hr>

<h2>Registrieren</h2>

<form action="register_process.php" method="post">
    <input type="text" name="username" placeholder="Benutzername">
    <input type="password" name="password" placeholder="Passwort">
    <input type="password" name="password_confirm" placeholder="Passwort wiederholen">
    <button type="submit">Registrieren</button>
</form>

</body>
</html>