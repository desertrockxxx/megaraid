<?php
require_once("dbconfig.php");


// Add Hinzufügen von Datensätzen
$frage = $_POST['frage'];
$antwort = $_POST['antwort'];
$checked = $_POST['checked'];
$fileToUpload = $_POST['fileToUpload'];

if(isset($frage)){
    if(isset($antwort)){
        if(isset($checked) && $checked == "on"){

            $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
        } else {

            $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
        }
    }
}


// Read Anzeigen von Datensätzen
$stmt = $db->query("SELECT titel, inhalt, checked, fileToUpload, datum FROM frage");
$fragen = $stmt->fetchAll();

foreach ($fragen as $key => $frage) {
    $titel[$key]  = $frage['titel'] ;
    $inhalt[$key]  = $frage['inhalt'];
    $checked[$key]  = $frage['checked'];
    $fileToUpload[$key]  = $frage['fileToUpload'];
    $datum[$key] = $frage['datum'];
}



?>