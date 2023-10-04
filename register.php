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

   
        echo "Registrierung erfolgreich. Willkommen, $Benutzername $Passwort!";
  


// Datenbankverbindung schließen
$conn->close();
?>