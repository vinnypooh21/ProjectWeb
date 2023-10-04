<?php

// Datenbankverbindung herstellen 
$servername = "localhost";
$username = "root";
$password = "neues-passwort";
$dbname = "Benutzeranmeldung";

$conn = new mysqli($servername, $username, $password, $dbname);

$Benutzername = $_POST["Benutzername"];
$Passwort = $_POST["Passwort"];
$Email = $_POST["Email"];

// INSERT TO SQL
$sql = "INSERT INTO Benutzer (Benutzername, Passwort, Email) VALUES ('$Benutzername', '$Passwort', '$Email')";

// Überprüfen Sie die Verbindung auf Fehler

if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}
else
{
    echo "Verbindung steeeeeht";
    echo "Dein benutzername lautet $Benutzername " ;
    echo "Deine Mail lautet $Email " ;
    
}



// Datenbankverbindung schließen
$conn->close();
?>