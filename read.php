<?php
require_once("inc/functions.php");
?>

<div class="container">
    <h2>Bestehende Datensätze</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Frage</th>
                <th>Antwort</th>
                <th>Auswahl</th>
                <th>FileToUpload</th>
                <th>Datum</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fragen as $key => $frage) { ?>
            <tr>
                <td><?php echo $id[$key] ;?></td>
                <td><?php echo $titel[$key]; ?></a></td>
                <td><?php echo $inhalt[$key]; ?></td>
                <td><?php echo $auswahl[$key]; ?></td>
                <td><?php echo $fileToUpload[$key]; ?></td>
                <td><?php echo $datum[$key]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
