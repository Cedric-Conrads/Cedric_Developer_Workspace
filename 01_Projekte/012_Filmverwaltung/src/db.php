<?php

$connection = new mysqli('localhost', 'root', '', 'Filmverwaltung');

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}
