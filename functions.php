<?php
require_once("dbconfig.php");


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



$stmt = $db->query("SELECT titel, inhalt, checked, fileToUpload FROM frage");
$fragen = $stmt->fetchAll();

foreach ($fragen as $key => $frage) {
    $titel[$key]  = $frage['titel'] ;
    $inhalt[$key]  = $frage['inhalt'];
    $checked[$key]  = $frage['checked'];
    $fileToUpload[$key]  = $frage['fileToUpload'];
}
 
// echo "Titel: " . $titel[1] . 
// "<br>Inhalt: " . $inhalt[1] .
// "<br>Checked: " . $checked[1] .
// "<br>FileToUpload: " . $fileToUpload[1];


?>