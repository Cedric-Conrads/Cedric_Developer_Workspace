Serverseitige Validierung
Was ist das?

Bei der serverseitigen Validierung prüft PHP die vom Benutzer eingegebenen Daten, bevor sie verarbeitet oder in der Datenbank gespeichert werden.

Beispielsweise soll unsere Lagerverwaltung verhindern, dass folgende Daten gespeichert werden:

Artikelnummer: ""
Name:          ""
Bestand:       -10
Lagerort:      ""

Der Grundgedanke lautet:

Eingabe → prüfen → nur gültige Daten weiterverarbeiten.

Warum brauche ich das?

Benutzereingaben dürfen nicht einfach ungeprüft übernommen werden.

Ohne Validierung könnten beispielsweise:

leere Artikelnummern,
leere Artikelnamen,
negative Lagerbestände,
leere Lagerorte

in der Datenbank landen.

Deshalb prüfen wir die Daten vor dem SQL-Statement.

Der Ablauf sieht so aus:

Formular
   ↓
POST-Daten
   ↓
Validierung
   ↓
┌───────────────┐
│ Daten gültig? │
└───────────────┘
   ↓         ↓
  Nein       Ja
   ↓         ↓
Fehler     INSERT
   ↓
  STOP
Syntax

Eine einfache Prüfung kann mit if, empty() und exit durchgeführt werden:

if (empty($name)) {
    echo "Name fehlt.";
    exit;
}
Erklärung
empty()

Mit:

empty($name)

prüfen wir, ob $name als leer gilt.

In Verbindung mit if:

if (empty($name)) {
    echo "Name fehlt.";
    exit;
}

bedeutet das:

Wenn $name leer ist → Fehlermeldung ausgeben und Script beenden.

exit

Nur einen Fehler auszugeben reicht nicht:

if (empty($name)) {
    echo "Name fehlt.";
}

PHP würde danach einfach mit dem restlichen Programm weitermachen.

Steht anschließend:

$stmt->execute();

könnten die ungültigen Daten trotzdem verarbeitet werden.

Deshalb verwenden wir:

exit;

Dadurch endet die weitere Ausführung des Scripts an dieser Stelle.

Beispiel

In unserer Lagerverwaltung:

$artikelnummer = $_POST['artikelnummer'];
$name = $_POST['name'];
$bestand = $_POST['bestand'];
$lagerort = $_POST['lagerort'];

if (empty($artikelnummer)) {
    echo "Artikelnummer fehlt.";
    exit;
}

if (empty($name)) {
    echo "Name fehlt.";
    exit;
}

if ($bestand === "") {
    echo "Bestand fehlt.";
    exit;
}

if ($bestand < 0) {
    echo "Bestand darf nicht negativ sein.";
    exit;
}

if (empty($lagerort)) {
    echo "Lagerort fehlt.";
    exit;
}

Erst nach diesen Prüfungen folgt unser Datenbankzugriff:

$stmt = $connection->prepare(
    "INSERT INTO artikel (artikelnummer, name, bestand, lagerort)
     VALUES (?, ?, ?, ?)"
);

Dadurch lautet die Reihenfolge:

POST-Daten holen
      ↓
Daten validieren
      ↓
Fehler? → exit
      ↓
Alles gültig?
      ↓
Datenbank
Besonderheit: empty() und die Zahl 0

Hier lauert eine wichtige PHP-Falle.

Folgendes funktioniert für unseren Lagerbestand nicht wie gewünscht:

if (empty($bestand)) {
    echo "Bestand fehlt.";
    exit;
}

Warum?

PHP betrachtet auch:

0

bei empty() als leer.

In einer Lagerverwaltung ist ein Bestand von 0 aber vollkommen gültig:

Bestand: 0

bedeutet einfach:

Artikel vorhanden, momentan kein Bestand auf Lager.

Deshalb prüfen wir gezielter:

if ($bestand === "") {
    echo "Bestand fehlt.";
    exit;
}

Jetzt unterscheiden wir:

""   → ❌ Eingabe fehlt
0    → ✅ gültiger Bestand
10   → ✅ gültiger Bestand

Zusätzlich verhindern wir negative Werte:

if ($bestand < 0) {
    echo "Bestand darf nicht negativ sein.";
    exit;
}

Damit gilt:

Eingabe	Ergebnis
""	❌ Bestand fehlt
-1	❌ Ungültig
0	✅ Gültig
1	✅ Gültig
500	✅ Gültig
Typische Fehler
Fehler 1: Variable vor der Prüfung überschreiben

Falsch:

$name = $_POST['name'];

$name = "";

if (empty($name)) {
    echo "Name fehlt.";
}

Dadurch wird die Benutzereingabe überschrieben und $name ist immer leer.

Richtig:

$name = $_POST['name'];

if (empty($name)) {
    echo "Name fehlt.";
    exit;
}
Fehler 2: exit vergessen
if (empty($name)) {
    echo "Name fehlt.";
}

Die Fehlermeldung erscheint zwar, PHP arbeitet danach aber weiter.

Besser:

if (empty($name)) {
    echo "Name fehlt.";
    exit;
}
Fehler 3: empty() für gültige 0 verwenden
if (empty($bestand)) {
    echo "Bestand fehlt.";
}

❌ Problematisch, wenn 0 ein erlaubter Wert ist.

Stattdessen:

if ($bestand === "") {
    echo "Bestand fehlt.";
    exit;
}
Fehler 4: Nur im HTML validieren

Eine Prüfung im HTML ist hilfreich:

<input type="text" name="name" required>

Sie ersetzt aber nicht die serverseitige Prüfung in PHP.

Das Backend sollte Benutzereingaben selbst überprüfen, bevor es sie verarbeitet.

Merksatz

Benutzereingaben niemals ungeprüft verarbeiten: Erst validieren, dann Datenbankzugriff.

Und für empty():

empty() betrachtet auch 0 als leer. Wenn 0 ein gültiger Wert ist, muss gezielter geprüft werden.


Prüfungswissen


Wichtig ist die Unterscheidung zwischen clientseitiger und serverseitiger Validierung.

HTML / Browser
→ clientseitig

PHP / Server
→ serverseitig

Clientseitige Validierung verbessert vor allem die Benutzerführung, sollte aber nicht die einzige Prüfung sein.

Entscheidende Daten müssen serverseitig geprüft werden.