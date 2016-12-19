
<Form method="post" enctype="multipart/form-data" action="#">
<?php
include "module/FormFile.php";

$formFile = new FormFile("file");
$formFile->setName("userFile");
echo $formFile->inputFile();
$formFile->onLoadFile();

?>
    <input type="submit" name="sub">
    </form>

