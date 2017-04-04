<?php
require_once("dbconfig.php");


$frage = $_GET['frage'];
$antwort = $_GET['antwort'];
$checked = $_GET['checked'];
$fileToUpload = $_GET['fileToUpload'];

if(isset($frage)){
    if(isset($antwort)){
        if(isset($checked) && $checked == "on"){
            $db->query("INSERT INTO frage (titel, inhalt, checked) VALUES ('$frage', '$antwort', '$checked', $fileToUpload)");
        } else {
            $db->query("INSERT INTO frage (titel, inhalt, checked) VALUES ('$frage', '$antwort', '$checked', $fileToUpload)");
        }
    }
}



?>