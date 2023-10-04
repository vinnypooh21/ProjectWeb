<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    // Hier sollten Sie den Code zur Benutzerregistrierung einfügen.
    
    echo "Registrierung erfolgreich. Willkommen, $benutzername!";
}
?>
