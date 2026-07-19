## bind_param()

bind bedeutet:
= verbinden / verknüpfen

bind_param() verbindet die PHP-Variablen mit den Platzhaltern (?) der SQL-Anweisung.

Beispiel:

? → $artikelnummer

? → $name

? → $bestand

? → $lagerort

Erst nach bind_param() weiß die Datenbank,
welcher Wert in welchen Platzhalter eingesetzt werden soll.