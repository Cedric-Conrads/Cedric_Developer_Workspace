Der Platzhalter ? wird als kompletter Wert durch bind_param() ersetzt.

Deshalb werden zusätzliche Zeichen (z. B. %) vorher in PHP an den Wert angehängt und nicht in den SQL-String um den Platzhalter geschrieben.