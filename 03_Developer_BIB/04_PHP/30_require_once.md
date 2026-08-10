require

Bindet eine Datei immer ein.

require_once

Bindet eine Datei nur ein, wenn sie im aktuellen PHP-Aufruf noch nicht eingebunden wurde.

Das Wichtigste überhaupt

require_once bedeutet NICHT:

Die Datei wird für immer nur einmal geladen.

Das wäre falsch.

Es bedeutet:

Während dieses einen Seitenaufrufs wird sie nur einmal geladen.

Wenn der Benutzer anschließend auf eine andere Seite klickt, startet PHP komplett neu und require_once kann die Datei dort wieder einmal einbinden.

Metapher:

Stell dir einen Türsteher vor.

require

Jeder darf rein.

Auch wenn dieselbe Person zehnmal kommt.

😂

require_once

Der Türsteher sagt:

"Moment..."

"Du bist heute schon drin."

❌

"Du kommst heute kein zweites Mal rein."

💥 Genau so arbeitet require_once.