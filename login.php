<?php
// Datenbankverbindung herstellen (verwenden Sie Ihre eigenen Zugangsdaten)
$servername = "localhost";
$username = "IhrBenutzername";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen Sie die Verbindung auf Fehler
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Benutzereingaben aus dem Formular abrufen
$benutzername = $_POST["Benutzername"];
$passwort = $_POST["Passwort"];

// SQL-Abfrage zum Überprüfen der Anmeldedaten
$sql = "SELECT * FROM Benutzer WHERE Benutzername = '$benutzername' AND Passwort = '$passwort'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Anmeldung erfolgreich
    echo "Anmeldung erfolgreich. Willkommen, $benutzername!";
} else {
    // Anmeldung fehlgeschlagen
    echo "Anmeldung fehlgeschlagen. Überprüfen Sie Ihre Anmeldeinformationen.";
}

// Datenbankverbindung schließen
$conn->close();
?>
