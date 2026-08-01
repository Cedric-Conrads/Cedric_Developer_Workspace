LIKE

Bedeutung:

Sucht nach einem Muster oder Teil eines Textes.

Syntax:

WHERE spaltenname LIKE ?

Häufig zusammen mit Wildcards:

% = beliebig viele Zeichen

Beispiele:

WHERE name LIKE 'Ham%'

➡️ Findet:

Hammer
Hamburger
Hamster
WHERE name LIKE '%Ham%'

➡️ Findet:

Hammer
Bohrhammer
Vorschlaghammer



Mersatz:


= sucht nach einer exakten Übereinstimmung.

LIKE sucht nach Mustern oder Teilbegriffen.