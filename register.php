<?php

// Datenbankverbindung herstellen (verwenden Sie Ihre eigenen Zugangsdaten)
$servername = "localhost";
$username = "root";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

$Benutzername = $_POST["Benutzername"];
$Passwort = $_POST["Passwort"];

// Überprüfen Sie die Verbindung auf Fehler

if ($conn->connect_error) {
    echo "Verbindung zur Datenbank fehlgeschlagen: " ;
}


// Datenbankverbindung schließen
$conn->close();
?>