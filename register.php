<?php

// Datenbankverbindung herstellen 
$servername = "localhost";
$username = "root";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

$Benutzername = $_POST["Benutzername"];
$Passwort = $_POST["Passwort"];
$Mail = $_POST["Mail"];

// INSERT TO SQL
$sql = "INSERT INTO Benutzer (Benutzername, Passwort, Mail) VALUES ('$Benutzername', '$Passwort', '$Mail')";

// Überprüfen Sie die Verbindung auf Fehler

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}
else
{
    echo "Verbindung steeeeeht";
}



// Datenbankverbindung schließen
$conn->close();
?>