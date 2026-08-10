Try-Catch / Exception Handling
Was ist das?

try und catch werden in PHP verwendet, um Fehler (Exceptions) kontrolliert abzufangen und zu behandeln, anstatt das Programm mit einer technischen Fehlermeldung abstürzen zu lassen.

Beispiel aus unserer Lagerverwaltung:

Eine Artikelnummer darf durch den UNIQUE-Eintrag in der Datenbank nur einmal existieren.

Wird sie trotzdem erneut gespeichert, erzeugt MySQL/PHP eine Exception.

Ohne Fehlerbehandlung:

Fatal error:
Uncaught mysqli_sql_exception:
Duplicate entry ...

Mit try und catch können wir diesen Fehler kontrolliert behandeln.

Warum brauche ich das?

Ohne Exception Handling kann ein Benutzer technische Fehlermeldungen sehen:

Fatal error
mysqli_sql_exception
Duplicate entry
Dateipfad
Zeilennummer
Stack trace

Das ist:

nicht benutzerfreundlich,
für normale Benutzer unverständlich,
und technische Interna sollten nicht unnötig angezeigt werden.

Stattdessen können wir beispielsweise ausgeben:

Fehler beim Speichern.
Syntax
try {
    // Code, der eine Exception verursachen könnte
} catch (Exception $e) {
    // Fehler behandeln
}
Erklärung
try

try bedeutet sinngemäß:

„Versuche, diesen Code auszuführen.“

Bei unserer Lagerverwaltung:

try {
    $stmt->execute();
}

PHP versucht also, das SQL-Statement auszuführen.

catch

Tritt innerhalb von try eine passende Exception auf, springt PHP in den catch-Block.

catch (mysqli_sql_exception $e) {
    echo "Fehler beim Speichern.";
    exit;
}

mysqli_sql_exception gibt dabei an, welche Art von Exception abgefangen werden soll.

$e enthält Informationen über die aufgetretene Exception.

Beispiel
try {
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
    echo "Fehler beim Speichern.";
    exit;
}

Der Ablauf:

$stmt->execute()
       ↓
      TRY
       ↓
 ┌─────┴─────┐
 │           │
Erfolg    SQL-Exception
 │           │
 ▼           ▼
weiter      CATCH
             │
             ▼
     Fehlermeldung
             │
            exit
Beispiel aus der Lagerverwaltung

Die Datenbank enthält bereits:

ART-10003

Der Benutzer versucht erneut:

ART-10003

Durch den UNIQUE-Index lehnt die Datenbank den zweiten Eintrag ab.

Ohne try/catch:

Fatal error: Uncaught mysqli_sql_exception:
Duplicate entry 'ART-10003' for key 'artikelnummer'

Mit try/catch:

Fehler beim Speichern.

Das Programm kann den Fehler dadurch kontrolliert behandeln.

Was ist $e?

In:

catch (mysqli_sql_exception $e)

enthält:

$e

Informationen über die aufgetretene Exception.

Darüber können wir später beispielsweise herausfinden, welcher Datenbankfehler tatsächlich aufgetreten ist.

Wichtig:

Ein mysqli_sql_exception bedeutet nicht automatisch „doppelte Artikelnummer“.

Es können auch andere SQL-Probleme eine solche Exception verursachen.

Deshalb sollten wir nicht jeden SQL-Fehler automatisch als:

Diese Artikelnummer existiert bereits.

bezeichnen.

Typische Fehler
execute() in catch schreiben

Falsch:

try {

} catch (mysqli_sql_exception $e) {
    $stmt->execute();
}

Der Code, bei dem ein Fehler auftreten könnte, gehört in try.

Richtig:

try {
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
    echo "Fehler beim Speichern.";
}
Exception einfach ignorieren
try {
    $stmt->execute();
} catch (mysqli_sql_exception $e) {

}

Damit wird die Exception zwar abgefangen, aber überhaupt nicht behandelt.

Jeden SQL-Fehler gleich behandeln
catch (mysqli_sql_exception $e) {
    echo "Artikelnummer existiert bereits.";
}

Das kann falsch sein, weil möglicherweise ein völlig anderer Datenbankfehler aufgetreten ist.

Der genaue Fehler sollte unterschieden werden.

Merksatz

try = Versuch den Code auszuführen.
catch = Falls dabei die passende Exception entsteht, fange sie ab und behandle sie.

Oder ganz kurz:

TRY   → versuchen
CATCH → Fehler auffangen


Prüfungswissen

Exception Handling sorgt dafür, dass Fehler kontrolliert behandelt werden können.

Dabei gilt grundsätzlich:

Code mit Fehlerrisiko
        ↓
       try
        ↓
Exception?
   ↓        ↓
 Nein       Ja
   ↓        ↓
weiter    catch

Technische Fehlermeldungen sollten in produktiven Anwendungen nicht ungefiltert an Benutzer ausgegeben werden.


