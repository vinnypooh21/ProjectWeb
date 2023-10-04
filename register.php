<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Benutzername = $_POST["Benutzername"];
    $Passwort = $_POST["Passwort"];

    echo "Eingegebener Benutzername: " . $Benutzername . "<br>";
    echo "Eingegebenes Passwort: " . $Passwort . "<br>";
}
?>
