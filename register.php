<?php

// Datenbankverbindung herstellen (verwenden Sie Ihre eigenen Zugangsdaten)
$servername = "localhost";
$username = "root";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen Sie die Verbindung auf Fehler
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Benutzername = $_POST["Benutzername"];
    $Passwort = $_POST["Passwort"];

    // SQL-Abfrage zum Einfügen des Benutzers in die Datenbank
    $sql = "INSERT INTO Benutzer (Benutzername, Passwort) VALUES ('$Benutzername', '$Passwort')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich. Willkommen, $Benutzername $Passwort!";
    } else {
        echo "Fehler bei der Registrierung: " . $conn->error;
    }
}

// Datenbankverbindung schließen
$conn->close();
?>