Was ist das?

INT und DECIMAL sind Datentypen für Zahlen.

INT speichert ganze Zahlen.
DECIMAL speichert Zahlen mit Nachkommastellen.
Wann verwende ich INT?

Immer dann, wenn nur ganze Zahlen benötigt werden.

Beispiele
Alter:             23
Lagerbestand:      150
Erscheinungsjahr:  2001
Filmlaufzeit:      152 Minuten
Wann verwende ich DECIMAL?

Immer dann, wenn Nachkommastellen wichtig sind.

Beispiele
Filmbewertung:     8.5
Preis:            12.99 €
Gewicht:          82.4 kg
Typischer Anfängerfehler

❌ Falsch gedacht:

Ich nehme DECIMAL, weil 152 Minuten später zu Stunden werden könnten.

Warum ist das falsch?

Die Datenbank rechnet nichts um.

Sie speichert lediglich den Wert, den du ihr gibst.

152

bleibt

152

Die Umrechnung in Stunden müsste dein Programm übernehmen – nicht die Datenbank.

Merksatz
INT = ganze Zahlen

DECIMAL = Zahlen mit Nachkommastellen



Praxisbeispiel





Filmtabelle

Feld	Datentyp	Begründung
id	    INT         fortlaufend
titel	VARCHAR	Text
genre	VARCHAR	Text
erscheinungsjahr	INT	ganze Jahreszahl
bewertung	DECIMAL(3,1)	z. B. 8.5