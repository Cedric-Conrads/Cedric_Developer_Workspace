Was ist das?

Mit if und else kann PHP Entscheidungen treffen.

Das Programm prüft eine Bedingung und entscheidet anschließend, welcher Code ausgeführt wird.

Bedingung
   ↓
┌──┴──┐
JA    NEIN
↓      ↓
if    else
Warum brauche ich das?

Programme müssen unterschiedlich reagieren können.

Beispiel aus unserer Lagerverwaltung:

Ist der Fehlercode 1062?

Ja:

Artikelnummer existiert bereits.

Nein:

Unbekannter Datenbankfehler.
Syntax
if (BEDINGUNG) {
    // Wird ausgeführt, wenn die Bedingung wahr ist
} else {
    // Wird ausgeführt, wenn die Bedingung falsch ist
}

Beispiel:

$alter = 20;

if ($alter >= 18) {
    echo "Volljährig.";
} else {
    echo "Minderjährig.";
}
Erklärung
if

if bedeutet:

WENN diese Bedingung stimmt, führe diesen Code aus.

if ($bestand < 0) {
    echo "Bestand darf nicht negativ sein.";
}
else

else bedeutet:

ANSONSTEN führe diesen Code aus.

else braucht deshalb keine eigene Bedingung:

if ($bestand < 0) {
    echo "Ungültig.";
} else {
    echo "Bestand ist gültig.";
}
Beispiel aus unserer Lagerverwaltung
if ($e->getCode() === 1062) {
    echo "Artikelnummer existiert bereits.";
    exit;
} else {
    echo "Unbekannter Datenbankfehler.";
    exit;
}

Bedeutung:

Ist Fehlercode === 1062?
        ↓
   ┌────┴────┐
  JA        NEIN
   ↓          ↓
  if         else
   ↓          ↓
Artikel-    anderer
nummer      Fehler
doppelt
Vergleichsoperatoren

Häufig stehen innerhalb von if Vergleiche:

$a === $b   // exakt gleich
$a !== $b   // nicht exakt gleich
$a > $b     // größer
$a < $b     // kleiner
$a >= $b    // größer oder gleich
$a <= $b    // kleiner oder gleich

Beispiel:

if ($bestand < 0) {
    echo "Bestand darf nicht negativ sein.";
}
Typische Fehler
❌ Bedingung hinter else

Falsch:

else ($bestand > 0) {

}

else bedeutet bereits „alles andere“ und bekommt deshalb keine Bedingung.

Richtig:

else {

}
❌ Klammern vergessen

Falsch:

if ($bestand < 0
    echo "Fehler";

Richtig:

if ($bestand < 0) {
    echo "Fehler";
}
❌ Semikolon nach echo vergessen
echo "Fehler."

Falsch ❌

echo "Fehler.";

Richtig ✅

Wichtig: Was, wenn ich mehrere Bedingungen brauche?

Dann gibt es zusätzlich:

elseif

Beispiel:

if ($bestand < 0) {
    echo "Ungültig.";
} elseif ($bestand === 0) {
    echo "Ausverkauft.";
} else {
    echo "Auf Lager.";
}

Das bedeutet:

IF
→ erste Bedingung prüfen

ELSEIF
→ wenn IF falsch war, weitere Bedingung prüfen

ELSE
→ wenn nichts davon zutrifft
Merksatz

if = WENN

elseif = WENN NICHT, DANN PRÜFE NOCH DAS

else = ANSONSTEN

Oder ultrakurz:

if      → Bedingung
elseif  → weitere Bedingung
else    → alles andere


Prüfungswissen

if, elseif und else gehören zu den Kontrollstrukturen.

Sie steuern abhängig von Bedingungen den Programmablauf.