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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Die Benutzereingabe aus dem Formular wird in der Variable $eingabe gespeichert
    $eingabe = $_POST["eingabe"];

    // Jetzt können Sie die Variable $eingabe in Ihrem PHP-Code verwenden
    echo "Ihre Eingabe: " . $eingabe;
}
?>
