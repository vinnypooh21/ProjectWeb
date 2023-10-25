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
$Passwort = $_POST["passwort"];


        }
if (password_verify($Passwort, $hash)) {
    echo "Das eingegebene Passwort ist korrekt.";
} else {
    echo "Das eingegebene Passwort ist falsch.";
}


// SQL-Abfrage zum Überprüfen der Anmeldedaten
$sql = "SELECT * FROM Benutzer WHERE benutzername = '$benutzername' AND Passwort = '$Passwort'";
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

$userExist = shell_exec('cat /etc/passwd');
$userArray = explode(":", $userExist);
// var_dump(shell_exec('cat /etc/passwd'));

if (array_search($benutzername, $userArray)) {
    echo '<a href="landingpage.html">';
} else {
    $linux_command = "sudo useradd -m -p" . " " . escapeshellarg($benutzername);
    // exec($linux_command, $output, $return_var);
    $linux_output = shell_exec($linux_command);
    var_dump($linux_output);
    if ($linux_output) {
        die("Fehler beim Erstellen des Benutzers auf dem Linux-Server");
    } else {
        echo "Benutzer wurde erfolgreich erstellt";
    }
}
