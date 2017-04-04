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
      <h3>Frage</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Antwort</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Kommentar</h3>        
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
        
        <button data-toggle="collapse" data-target="#demo2">Bestehende Frage beantworten</button>
        <div id="demo2" class="collapse">
            Lorem ipsum dolor text.... 2
        </div>
        
        <button data-toggle="collapse" data-target="#demo3">Kommentar zu Antwort hinzufügen</button>
        <div id="demo3" class="collapse">
            Lorem ipsum dolor text.... 3
        </div>
    </div>
</div>


<?php echo "Deine Frage lautet: " . $_GET['frage'] . "<br>Als Antwort gibts du: " . $_GET['antwort'] . "<br>Deine Gesinnung ist: " . $_GET['checked'] ; ?>

<?php 
require_once("footer.php"); ?>
?>