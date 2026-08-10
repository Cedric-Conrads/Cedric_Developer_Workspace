include
Was ist das?

include bindet eine andere PHP-Datei in die aktuelle Datei ein.

PHP liest die angegebene Datei und fügt ihren Inhalt an der Stelle von include ein.

Warum brauche ich das?

Damit ich Code nicht mehrfach schreiben muss.

Beispiel:

Ich habe einen Footer, der auf jeder Seite gleich aussehen soll.

Statt den Footer in jede Datei zu kopieren, schreibe ich ihn einmal in:

footer.php

und binde ihn anschließend überall mit:

include "footer.php";

ein.

Syntax
include "datei.php";
Erklärung

Wenn PHP auf include trifft, öffnet es die angegebene Datei und fügt deren Inhalt an genau dieser Stelle ein.

Der Unterschied zu require:

include → Fehlt die Datei, gibt PHP eine Warning aus und das Script läuft weiter.
require → Fehlt die Datei, gibt PHP einen Fatal Error aus und beendet das Script.
Beispiel
include "footer.php";

echo "Willkommen!";

PHP behandelt das intern ungefähr so:

<!-- Inhalt von footer.php -->

echo "Willkommen!";
Typische Fehler
❌ Datei existiert nicht
include "test.php";

PHP gibt eine Warnung aus, führt das Programm aber weiter aus.

❌ Falscher Dateipfad
include "ordner/footer.php";

Wenn der Pfad falsch ist, wird die Datei nicht gefunden.

Merksatz

include bindet eine Datei ein. Fehlt sie, läuft das Script trotzdem weiter.

Wann verwende ich include?

Für Dateien, die nicht zwingend notwendig sind.

Zum Beispiel:

Footer
Header (je nach Projekt)
Navigation
Sidebar
Werbebanner
Vergleich
Befehl	Wenn die Datei fehlt
include	⚠️ Warning – Script läuft weiter
require	❌ Fatal Error – Script wird beendet