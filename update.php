<?php
require_once("functions.php");
?>

<div class="container">
    <h2>Datensätze verändern</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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
</div>