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

// Benutzereingaben aus dem Formular abrufen
$benutzername = $_POST["benutzername"];
$passwort = $_POST["passwort"];

// Überprüfen, ob der Benutzername bereits existiert
$check_sql = "SELECT * FROM Benutzer WHERE Benutzername = '$benutzername'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    // Benutzername existiert bereits
    echo "Der Benutzername ist bereits vergeben. Bitte wählen Sie einen anderen.";
} else {
    // Benutzer registrieren
    // Passwort sicher hashen, bevor es in die Datenbank gespeichert wird
    $hashedPassword = password_hash($passwort, PASSWORD_DEFAULT);
    
    $insert_sql = "INSERT INTO Benutzer (Benutzername, Passwort) VALUES ('$benutzername', '$hashedPassword')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Registrierung erfolgreich. Willkommen, $benutzername!";
    } else {
        echo "Fehler bei der Registrierung: " . $conn->error;
    }
}

// Datenbankverbindung schließen
$conn->close();
?>
