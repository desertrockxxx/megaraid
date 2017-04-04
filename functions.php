<?php
require_once("dbconfig.php");


$frage = $_GET['frage'];
$antwort = $_GET['antwort'];
$checked = $_GET['checked'];
$fileToUpload = $_GET['fileToUpload'];

if(isset($frage)){
    if(isset($antwort)){
        if(isset($checked) && $checked == "on"){
            $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
        } else {
            $db->query("INSERT INTO frage (titel, inhalt, checked, fileToUpload) VALUES ('$frage', '$antwort', '$checked', '$fileToUpload')");
        }
    }
}



$stmt = $db->query("SELECT titel, inhalt, checked FROM frage");
$fragen = $stmt->fetchAll();
foreach($fragen as $key => $frage){
    $titel = $frage[0];
}

var_dump($frage);


?>