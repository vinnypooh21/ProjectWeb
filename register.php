<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $benutzername = $_POST["benutzername"];
    $passwort = $_POST["passwort"];

    echo "Eingegebener Benutzername: " . $benutzername . "<br>";
    echo "Eingegebenes Passwort: " . $passwort . "<br>";
}
?>
