<?php
require_once("functions.php");
?>

<div class="container">
    <h2>Bestehende Datensätze</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>            
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Frage</th>
                <th>Antwort</th>
                <th>Pro?</th>
                <th>FileToUpload</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($fragen as $key => $frage) { ?>
            <tr>
                <td><?php echo $titel[$key]; ?></td>
                <td><?php echo $inhalt[$key]; ?></td>
                <td><?php echo $checked[$key]; ?></td>
                <td><?php echo $fileToUpload[$key]; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<pre>
<?php  ?>
</pre>