include_once
Was ist das?

include_once bindet eine andere PHP-Datei in die aktuelle Datei ein.

Bevor PHP die Datei lädt, prüft es jedoch, ob sie im aktuellen Seitenaufruf bereits eingebunden wurde.

Wenn nein → Datei wird eingebunden.
Wenn ja → Datei wird nicht noch einmal eingebunden.
Warum brauche ich das?

Damit eine Datei nicht versehentlich mehrfach eingebunden wird.

Das verhindert unnötigen Code und mögliche Fehler.

Syntax
include_once "datei.php";
Erklärung

Wenn PHP auf include_once trifft, prüft es zuerst:

"Wurde diese Datei in diesem Seitenaufruf bereits eingebunden?"

Falls nicht:

Datei einbinden

Falls doch:

Datei nicht erneut einbinden
Beispiel
include_once "footer.php";

PHP denkt:

footer.php schon geladen?

↓

Nein

↓

Einbinden

Beim zweiten Mal:

include_once "footer.php";

PHP denkt:

footer.php schon geladen?

↓

Ja

↓

Nicht noch einmal laden
Typische Fehler
❌ Datei existiert nicht
include_once "footer.php";

Existiert die Datei nicht, gibt PHP eine Warning aus.

Das Script läuft trotzdem weiter.

❌ include_once mit require_once verwechseln

Viele Anfänger denken:

include_once

und

require_once

machen genau dasselbe.

Das stimmt fast, aber nicht ganz.

Der Unterschied:

include_once → Warning, Script läuft weiter.
require_once → Fatal Error, Script wird beendet.
Merksatz

include_once bindet eine Datei nur einmal ein. Fehlt die Datei, läuft das Script trotzdem weiter.

Wann verwende ich include_once?

Für Dateien, die:

nur einmal eingebunden werden sollen,
aber nicht zwingend notwendig sind.

Zum Beispiel:

Footer
Sidebar
Navigation
optionale Templates
Vergleich
Befehl	Datei wird nur einmal eingebunden?	Wenn die Datei fehlt
include	❌ Nein	⚠️ Warning
include_once	✅ Ja	⚠️ Warning
require	❌ Nein	❌ Fatal Error
require_once	✅ Ja	❌ Fatal Error




include
→ Datei einbinden.
→ Fehlt sie, läuft das Script weiter.

include_once
→ Datei nur einmal einbinden.
→ Fehlt sie, läuft das Script trotzdem weiter.

require
→ Datei einbinden.
→ Fehlt sie, beendet PHP das Script.

require_once
→ Datei nur einmal einbinden.
→ Fehlt sie, beendet PHP das Script.