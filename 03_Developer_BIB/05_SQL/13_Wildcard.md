% (Wildcard)

Der Platzhalter % bedeutet:

"Hier darf beliebig viel Text stehen."

Beispiele:

Ham%

➡️ Beginnt mit Ham

%Ham

➡️ Endet mit Ham

%Ham%

➡️ Enthält irgendwo Ham



1. Benutzer tippt "Ham" ein

↓

2. PHP liest den Suchbegriff

$suche = "Ham";

↓

3. SQL bekommt den Suchbegriff

↓

4. SQL benutzt LIKE und %

↓

5. Datenbank liefert:
Hammer
Bohrhammer
Vorschlaghammer
...