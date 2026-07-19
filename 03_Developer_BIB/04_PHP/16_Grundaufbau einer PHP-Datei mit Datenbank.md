# Grundaufbau einer PHP-Datei mit Datenbank

1. Verbindung herstellen

$connection = new mysqli(...);

↓

2. Verbindung prüfen

if ($connection->connect_error) {
    die(...);
}

↓

3. SQL vorbereiten

prepare()

↓

4. Werte verbinden

bind_param()

↓

5. SQL ausführen

execute()

↓

6. Ergebnis holen

get_result()

↓

7. Daten verarbeiten

fetch_assoc()