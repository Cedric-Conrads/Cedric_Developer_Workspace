# Suchfunktion – Gesamtablauf

```text
GET-Formular → isset() → Suchbegriff → %Suchbegriff% → LIKE ? → prepare → bind_param → execute → get_result → while/fetch_assoc
```

```php
$suche = isset($_GET["suche"]) ? $_GET["suche"] : "";
$suche = "%" . $suche . "%";
$stmt = $connection->prepare("SELECT * FROM artikel WHERE name LIKE ?");
$stmt->bind_param("s", $suche);
$stmt->execute();
$result = $stmt->get_result();
```
