<?php
require_once("dbconfig.php");


$frage = $_GET['frage'];
$antwort = $_GET['antwort'];
$checked = $_GET['checked'];

if(isset($frage)){
    if(isset($antwort)){
        if(isset($checked)){
            $db->query("INSERT INTO frage (titel, inhalt, checked) VALUES ('$frage', '$antwort', '$checked')");
        }
    }
}



?>