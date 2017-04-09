<?php
require_once("inc/functions.php");
?>

<div class="container">
    <h2>Hinzufügen einer neuen Frage</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data">
        <!--Gesinnung eingeben-->
        <div class="form-group">
          <div class="checkbox">
              <input type="checkbox" checked="checked" name="checked" /> Pro?
          </div>
        </div>
        <div class="form-group">
          <label for="frage">Frage</label>
          <input type="text" class="form-control" name="frage" placeholder="Frage">
        </div>
        <div class="form-group">
          <label for="antwort">Antwort</label>
          <input type="text" class="form-control" name="antwort" placeholder="Antwort">
        </div>
        <?php require_once("upload.php"); ?>
    </form>
</div>

