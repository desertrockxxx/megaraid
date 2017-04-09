<?php
require_once("inc/functions.php");
?>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" class="btn btn-default">Absenden</button>
        </div>
    </form>
</div>