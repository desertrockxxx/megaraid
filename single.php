<?php
require_once("inc/functions.php");
?>

<div class="container">
    <h2>Bestehender Einzel-Datensatz</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Antwort</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $id[0];?></td>
                <td><?php echo $titel[0] ;?></td>
                <td><?php echo $inhalt[0] ;?></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data">
        <select name="id_auswahl" class="selectpicker">
            <?php foreach($fragen as $key => $frage) { ?>
            <option><?php echo $frage['id']; ?></option>
            <?php } ?>
        </select>
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

