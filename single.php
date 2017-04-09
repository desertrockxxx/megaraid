<?php
require_once("inc/functions.php");
?>

<div class="container">
    <h2>Bestehender Einzel-Datensatz</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Antwort</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $titel[0] ;?></td>
                <td><?php echo $inhalt[0] ;?></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data">
        <div class="form-group">
          <label for="antwort">Antwort</label>
          <input type="text" class="form-control" name="antwort" placeholder="Antwort">
        </div>
        <div class="form-group">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" class="btn btn-default">Absenden</button>
        </div>
    </form>
</div>
