<?php
require_once("dbconfig.php");


// Add Hinzufügen von Datensätzen
$frage = $_REQUEST['frage'];
$antwort = $_REQUEST['antwort'];
$checked = $_REQUEST['checked'];
$fileToUpload = $_REQUEST['fileToUpload'];

if(isset($frage) && isset($antwort)){
    if(isset($checked) && $checked == "on"){
        $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
    } else {
        $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
    }
}


// Read Anzeigen von Datensätzen
$stmt = $db->query("SELECT id, titel, inhalt, checked, fileToUpload, datum FROM frage");
$fragen = $stmt->fetchAll();

foreach ($fragen as $key => $frage) {
    $id[$key] = $frage['id'];
    $titel[$key]  = $frage['titel'] ;
    $inhalt[$key]  = $frage['inhalt'];
    $checked[$key]  = $frage['checked'];
    $fileToUpload[$key]  = $frage['fileToUpload'];
    $datum[$key] = $frage['datum'];
}

?>
