Was ist das?

require bindet eine andere PHP-Datei in die aktuelle Datei ein.

PHP liest die angegebene Datei und fügt ihren gesamten Inhalt an der Stelle von require ein.

Warum brauche ich das?

Damit ich Code nicht mehrfach schreiben muss.

Beispiel:

Statt die Datenbankverbindung in fünf Dateien zu schreiben, lege ich sie einmal in db.php ab.

Alle anderen Dateien laden sie anschließend mit:

require "db.php";

Dadurch muss die Verbindung später nur an einer Stelle geändert werden.

Merksatz

require kopiert den Inhalt einer PHP-Datei gedanklich an genau die Stelle, an der require steht.

Metapher

Stell dir vor, db.php ist ein fertiger Lego-Motor.

Jedes Auto braucht einen Motor.

Statt fünf Motoren neu zu bauen, setzt du denselben Motor überall dort ein, wo er gebraucht wird.

Typischer Fehler
// db.php

require "db.php";

❌ Falsch.

Die Datei würde sich selbst laden.

Richtig
// db.php

$connection = new mysqli(...);
// lagerbestand.php

require "db.php";

$stmt = $connection->prepare(...);