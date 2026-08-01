# header() und exit

## Was ist das?

`header()` sendet einen HTTP-Header. Für Weiterleitungen wird meist ein
`Location`-Header verwendet. `exit` beendet danach das PHP-Skript.

## Warum brauche ich das?

Nach einer erfolgreichen POST-Aktion verhindert die Weiterleitung eine
erneute Formularübermittlung beim Aktualisieren. `exit` stellt sicher, dass
kein weiterer Code ausgeführt wird.

## Syntax

```php
header("Location: lagerbestand.php", true, 303);
exit;
```

## Erklärung

Header müssen gesendet werden, bevor Antwortinhalt ausgegeben wurde.
Unsichtbare Leerzeichen, BOM oder frühere `echo`-Ausgaben können deshalb
„Headers already sent“ verursachen.

Für den Post/Redirect/Get-Ablauf ist Status `303 See Other` eindeutig:
Die Zieladresse soll anschließend per GET geladen werden.

## Beispiel

```php
$stmt->execute();

if ($stmt->affected_rows === 1) {
    header("Location: lagerbestand.php?status=updated", true, 303);
    exit;
}

http_response_code(409);
exit("Datensatz wurde nicht geändert.");
```

## Typische Fehler

- Vor `header()` wurde HTML ausgegeben.
- Nach der Weiterleitung fehlt `exit`.
- Ziel-URL wird ungeprüft aus Benutzereingaben übernommen (Open Redirect).
- Fehler werden immer weitergeleitet und dadurch verborgen.
- `header()` wird mit einer browserseitigen JavaScript-Navigation verwechselt.

## Merksatz

**`header()` schickt die Antwort in eine Richtung – `exit` stoppt den alten Weg.**

## Verwandte Themen

- [PHP-Workflow](03_Workflow.md)
- [Seiten und Aktionsdateien](20_PHP_Seiten_und_Aktionsdateien.md)
- [GET und POST](08_GET_und_POST.md)

## Prüfungswissen

HTTP-Statuscodes, Header-Reihenfolge und Post/Redirect/Get sind wichtige
Web-Grundlagen.
