<?php

// Datenbankverbindung herstellen (verwenden Sie Ihre eigenen Zugangsdaten)
$servername = "localhost";
$username = "root";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen Sie die Verbindung auf Fehler

    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich. Willkommen, $Benutzername $Passwort!";
    } else {
        echo "Fehler bei der Registrierung: " ;
    }


// Datenbankverbindung schließen
$conn->close();
?>