<?php
require_once("functions.php");
?>

<div class="container">
    <h2>Formular</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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
        <div class="form-group">
          <input type="file" name="fileToUpload" id="fileToUpload">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>
</div>

