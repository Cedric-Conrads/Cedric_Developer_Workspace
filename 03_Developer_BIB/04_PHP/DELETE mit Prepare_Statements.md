DELETE mit Prepared Statements
Was ist das?

DELETE löscht Datensätze aus einer Datenbank.

Damit nicht versehentlich alle Datensätze gelöscht werden, wird fast immer eine Bedingung (WHERE) verwendet.

Warum brauche ich das?

In vielen Anwendungen müssen Daten wieder entfernt werden.

Beispiele:

Film löschen
Artikel löschen
Benutzer löschen
Kunde löschen
Ablauf
Benutzer klickt auf "Löschen"
        ↓
Die ID wird über die URL übergeben
        ↓
$_GET["id"] liest die ID aus
        ↓
DELETE FROM filme WHERE id = ?
        ↓
bind_param("i", $id)
        ↓
execute()
        ↓
Der Datensatz wird gelöscht
        ↓
header("Location: filmliste.php")
        ↓
Der Benutzer wird zurück zur Übersicht geleitet
Syntax
$stmt = $connection->prepare(
    "DELETE FROM filme WHERE id = ?"
);

$stmt->bind_param("i", $id);

$stmt->execute();

header("Location: filmliste.php");
exit();
Erklärung
DELETE FROM

Löscht einen Datensatz aus der Tabelle.

WHERE id = ?

Legt fest, welcher Datensatz gelöscht werden soll.

Die ID ist eindeutig und verhindert, dass mehrere Datensätze gelöscht werden.

bind_param("i", $id)

Übergibt die ID sicher an das Prepared Statement.

i = Integer
$id = Datensatz, der gelöscht werden soll
execute()

Führt die SQL-Anweisung aus.

Erst jetzt wird der Datensatz tatsächlich gelöscht.

header()

Leitet den Benutzer nach erfolgreichem Löschen zurück zur Filmliste.

Typische Fehler

❌ DELETE FROM filme

→ Löscht alle Filme.

Immer WHERE id = ? verwenden.

❌ Falscher Datentyp

$stmt->bind_param("s", $id);

Die ID ist eine Zahl.

Richtig:

$stmt->bind_param("i", $id);

❌ get_result() verwenden

Nach einem DELETE gibt es keine Daten, die ausgelesen werden müssen.

Deshalb wird kein get_result() benötigt.

Merksatz

DELETE löscht einen Datensatz anhand seiner ID. Nach execute() wird der Benutzer meist mit header() zurück zur Übersicht geleitet.

Verwandte Themen
CRUD
Prepared Statements
bind_param()
execute()
header()
$_GET
SQL DELETE