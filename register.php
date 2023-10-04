<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Fügen Sie hier Sicherheitsüberprüfungen und Validierung ein.

    // Erstellen Sie den Linux-Benutzer (hier als Beispiel mit `shell_exec`).
    $command = "sudo useradd -m " . $username;
    $output = shell_exec($command);

    if ($output !== null) {
        echo "Benutzer wurde registriert.";
    } else {
        echo "Fehler bei der Benutzerregistrierung.";
    }
}
?>


