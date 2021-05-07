<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "1234";
$dBName = "mydb"; //<-- Name der Datenbank

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . mysqli_connect_error());
}