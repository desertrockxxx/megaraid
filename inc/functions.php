<?php
require_once("dbconfig.php");


// Add Hinzufügen von Datensätzen
$frage = $_REQUEST['frage'];
$antwort = $_REQUEST['antwort'];
$auswahl = $_REQUEST['auswahl'];
$fileToUpload = $_REQUEST['fileToUpload'];
 
if(isset($frage) && isset($antwort)){
    if(isset($auswahl)){
        $db->query("INSERT INTO frage (titel, inhalt, fileToUpload, auswahl) VALUES ('$frage', '$antwort', '$fileToUpload', '$auswahl')");
    } else {
        $db->query("INSERT INTO frage (titel, inhalt, fileToUpload, auswahl) VALUES ('$frage', '$antwort', '$fileToUpload', '$auswahl')");
    }
}


// Read Anzeigen von Datensätzen
$stmt = $db->query("SELECT id, titel, inhalt, fileToUpload, auswahl, datum FROM frage");
$fragen = $stmt->fetchAll();

foreach ($fragen as $key => $frage) {
    $id[$key] = $frage['id'];
    $titel[$key]  = $frage['titel'] ;
    $inhalt[$key]  = $frage['inhalt'];
    $fileToUpload[$key]  = $frage['fileToUpload'];
    $auswahl[$key]  = $frage['auswahl'];
    $datum[$key] = $frage['datum'];
}





?>
