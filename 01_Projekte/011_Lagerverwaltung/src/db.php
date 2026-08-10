<?php

$connection = new mysqli(
    "localhost",
    "root",
    "",
    "lagerverwaltung"
);

if ($connection->connect_error) {
    die("Verbindung fehlgeschlagen: " . $connection->connect_error);
}