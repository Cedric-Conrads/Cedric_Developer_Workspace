Was ist das?

htmlspecialchars() ist eine PHP-Funktion, die bestimmte HTML-Sonderzeichen so umwandelt, dass der Browser sie als Text darstellt, anstatt sie als HTML zu interpretieren.

Beispiel:

<h1>HACKER AUS TEMU</h1>

Ohne Schutz interpretiert der Browser <h1> als HTML.

Mit:

htmlspecialchars($wert)

wird der Inhalt auf der Webseite als Text dargestellt:

<h1>HACKER AUS TEMU</h1>
Warum brauche ich das?

Benutzereingaben dürfen nicht einfach ungeprüft in eine HTML-Seite ausgegeben werden.

Angreifer könnten versuchen, HTML- oder Script-Inhalte einzuschleusen.

htmlspecialchars() ist deshalb ein wichtiger Schutz gegen Cross-Site Scripting (XSS) bei der Ausgabe in HTML.

Syntax
htmlspecialchars($wert);

Bei einer Datenbankausgabe beispielsweise:

<?= htmlspecialchars($row["name"]) ?>

Eine ausführlichere Variante ist:

<?= htmlspecialchars($row["name"], ENT_QUOTES, "UTF-8") ?>
Erklärung

Angenommen, ein Benutzer gibt als Artikelname ein:

<h1>HALLO</h1>

Dieser Wert kann weiterhin genau so in der Datenbank stehen:

<h1>HALLO</h1>

htmlspecialchars() verändert also nicht automatisch den gespeicherten Datenbankwert.

Erst bei der Ausgabe:

<?= htmlspecialchars($row["name"]) ?>

werden relevante HTML-Sonderzeichen escaped.

Vereinfacht:

Datenbank
    ↓
<h1>HALLO</h1>
    ↓
htmlspecialchars()
    ↓
Browser
    ↓
"<h1>HALLO</h1>" als sichtbarer Text
Beispiel

Unsichere Ausgabe:

<td><?= $row["name"] ?></td>

Wenn in der Datenbank steht:

<h1>HALLO</h1>

kann der Browser daraus tatsächlich eine Überschrift machen.

Sichere Ausgabe:

<td><?= htmlspecialchars($row["name"]) ?></td>

Jetzt sieht der Benutzer:

<h1>HALLO</h1>
Beispiel aus unserer Lagerverwaltung

Unsere Tabellenausgabe kann so abgesichert werden:

<tr>
    <td><?= htmlspecialchars($row["artikelnummer"]) ?></td>
    <td><?= htmlspecialchars($row["name"]) ?></td>
    <td><?= htmlspecialchars($row["bestand"]) ?></td>
    <td><?= htmlspecialchars($row["lagerort"]) ?></td>
</tr>

Grundregel:

Daten beim Ausgeben passend zum Ausgabekontext behandeln.

Nur weil Daten bereits in unserer Datenbank stehen, bedeutet das nicht automatisch, dass wir ihnen vertrauen können.

Unterschied zu Prepared Statements

Die beiden Sicherheitsmaßnahmen lösen unterschiedliche Probleme.

Prepared Statements
        ↓
Datenbank / SQL
        ↓
Schutz vor SQL-Injection
htmlspecialchars()
        ↓
HTML-Ausgabe
        ↓
Schutz vor XSS durch HTML-Escaping
Merkhilfe

Prepared Statement → schützt SQL

htmlspecialchars() → schützt die HTML-Ausgabe

Man braucht also nicht entweder das eine oder das andere. Eine Anwendung kann beides benötigen.

Typische Fehler
❌ Nur beim Speichern benutzen
$name = htmlspecialchars($_POST["name"]);

Das ist für unser Ziel nicht die beste Stelle.

Wir möchten die ursprünglichen Daten grundsätzlich speichern und sie passend zum jeweiligen Ausgabekontext behandeln.

Besser:

$name = $_POST["name"];

Später bei der HTML-Ausgabe:

<?= htmlspecialchars($name) ?>
❌ Daten aus der Datenbank automatisch für sicher halten
<?= $row["name"] ?>

Die Datenbank kann schließlich Benutzereingaben enthalten.

Besser:

<?= htmlspecialchars($row["name"]) ?>
❌ Mit Prepared Statements verwechseln

Prepared Statements verhindern nicht automatisch XSS.

htmlspecialchars() verhindert wiederum keine SQL-Injection.

Beide arbeiten an unterschiedlichen Stellen der Anwendung.

Merksatz

🔐 Prepared Statements schützen beim SQL-Zugriff.

🔐 htmlspecialchars() schützt bei der HTML-Ausgabe.

Oder in unserer etwas weniger IHK-tauglichen Version:

htmlspecialchars() zum Browser: „Das ist TEXT, du Pisser. Interpretier den Bums nicht als HTML.“ 😂




Prüfungswissen

Wichtig ist die Unterscheidung zwischen:

Validierung
→ Ist der eingegebene Wert fachlich erlaubt?

Prepared Statements
→ Sichere Übergabe von Werten an SQL-Abfragen.

Output Escaping
→ Daten werden passend zum Ausgabekontext behandelt.

Für HTML verwenden wir dafür beispielsweise:

htmlspecialchars()