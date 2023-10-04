<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Benutzername = $_POST["benutzername"];
    $Passwort = $_POST["passwort"];

    // Hier sollten Sie den Code zur Benutzerregistrierung einfügen.
    
    echo "Registrierung erfolgreich. Willkommen, $Benutzername!";
}
?>
