# Authentisierung, Secrets und sicherer Betrieb

## Was ist das?

Authentisierung stellt Identität fest, Autorisierung entscheidet über
Rechte. Secrets sind vertrauliche Schlüssel oder Zugangsdaten. Sicherer
Betrieb umfasst Updates, Monitoring, Backups und Vorfallbehandlung.

## Warum brauche ich das?

Eine sichere Codebasis reicht nicht, wenn Passwörter falsch gespeichert,
Schlüssel veröffentlicht oder bekannte Schwachstellen nicht aktualisiert
werden.

## Syntax

```php
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $storedHash)) {
    session_regenerate_id(true);
    $_SESSION["user_id"] = $userId;
}
```

## Erklärung

Passwörter werden gehasht, nicht entschlüsselbar gespeichert. MFA schützt
zusätzlich. Sessions benötigen sichere Cookies und Rotation. Rechte werden
nach dem Least-Privilege-Prinzip geprüft.

Secrets gehören in geeignete Secret Stores oder Umgebungsvariablen, nicht
in Git. Wird ein Secret veröffentlicht, muss es rotiert werden – Löschen
aus der aktuellen Datei genügt nicht.

Betrieb benötigt definierte Update-, Backup-, Restore-, Logging- und
Incident-Prozesse.

## Beispiel

```text
Verdächtiger Zugriff
→ eindämmen
→ Beweise/Logs sichern
→ Ursache und Umfang analysieren
→ Zugangsdaten rotieren und Schwachstelle beheben
→ wiederherstellen
→ Maßnahmen dokumentieren
```

## Typische Fehler

- Passwörter werden verschlüsselt statt sicher gehasht.
- Login-Erfolg erneuert die Session-ID nicht.
- Secrets werden in `.env` gespeichert, aber `.env` committed.
- Logs enthalten Passwörter oder Tokens.
- Backups existieren ohne getestete Wiederherstellung.
- Alle Benutzer und Dienste besitzen Administratorrechte.

## Merksatz

**Identität prüfen, Rechte separat prüfen, Secrets rotieren, Betrieb überwachen.**

## Verwandte Themen

- [Security-Grundlagen](01_Grundlagen.md)
- [Webanwendungen absichern](02_Webanwendungen_Absichern.md)
- [Gitignore](../06_Git/09_Gitignore.md)
- [Docker – Grundlagen](../12_Docker/01_Grundlagen.md)

## Prüfungswissen

Authentisierung/Autorisierung, Hashing, MFA, Least Privilege, Backup,
Recovery und Incident Response gehören zum Prüfungsstoff.
