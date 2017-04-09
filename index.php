<?php 
require_once("header.php");
?>

<div class="jumbotron text-center">
  <h1>Megaraid</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Fragen</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Antworten</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Kommentieren</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <button data-toggle="collapse" data-target="#demo1">Neue Frage hinzufügen</button>
        <div id="demo1" class="collapse">
            <?php require_once("add.php"); ?>
            
        </div>
        
        <button data-toggle="collapse" data-target="#demo2">Alle Fragen anzeigen</button>
        <div id="demo2" class="collapse">
            <?php require_once("read.php"); ?>
            
        </div>
        
        <button data-toggle="collapse" data-target="#demo3">Einzelfrage anzeigen</button>
        <div id="demo3" class="collapse">
            <?php require_once("single.php"); ?>
        </div>
    </div>
</div>



<?php 
require_once("footer.php");
?>