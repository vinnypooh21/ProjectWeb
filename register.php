<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

        if ($conn->query($insert_sql) === TRUE) {
            echo "Registrierung erfolgreich. Willkommen, $benutzername!";
        } else {
            echo "Fehler bei der Registrierung: " 
        }

}

?>
