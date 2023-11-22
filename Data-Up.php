<?php
if(isset($_FILES['datei'])){
    $zielverzeichnis = '/var/www/html/homes/Home/upload';
    $zieldatei = $zielverzeichnis . basename($_FILES['datei']['name']);
    
    if(move_uploaded_file($_FILES['datei']['tmp_name'], $zieldatei)){
        echo 'Datei erfolgreich hochgeladen.';
    } else {
        echo 'Beim Hochladen der Datei ist ein Fehler aufgetreten.';
    }
}
?>