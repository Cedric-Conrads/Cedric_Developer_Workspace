# PHP – Wichtige Befehle

## Formulardaten
```php
$name = $_POST["name"];
```

## Datenbankverbindung
```php
$connection = new mysqli("localhost", "root", "", "datenbank");
```

## SQL vorbereiten und ausführen
```php
$stmt = $connection->prepare("...");
$stmt->bind_param(...);
$stmt->execute();
```

## Ergebnis holen
```php
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo $row["name"];
}
```

## Sessions
```php
session_start();
$_SESSION["loggedIn"] = true;
session_destroy();
```

## Weiterleitung
```php
header("Location: index.php");
exit;
```
