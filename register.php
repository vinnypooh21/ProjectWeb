<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fügen Sie hier Sicherheitsüberprüfungen und Validierung ein.

    // Verbindung zur MySQL-Datenbank herstellen
    $mysqli = new mysqli("localhost", "root", "neues-passwort", "Benutzeranmeldung");

    // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
    if ($mysqli->connect_error) {
        die("Verbindungsfehler: " . $mysqli->connect_error);
    }

    // SQL-Abfrage zum Einfügen des Benutzers
    $sql = "INSERT INTO benutzer (benutzername, passwort) VALUES (?, ?)";
    
    // Vorbereiten und ausführen der Abfrage
    if ($stmt = $mysqli->prepare($sql)) {
        // Passwort sicher hashen, bevor es in der Datenbank gespeichert wird
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt->bind_param("ss", $username, $hashedPassword);
        
        if ($stmt->execute()) {
            echo "Benutzer wurde registriert.";
        } else {
            echo "Fehler bei der Benutzerregistrierung.";
        }

        $stmt->close();
    } else {
        echo "Fehler bei der Vorbereitung der SQL-Abfrage.";
    }

    // Datenbankverbindung schließen
    $mysqli->close();
}
?>
