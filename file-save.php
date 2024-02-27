<?php

// var_dump($_FILES['file']);
// exit();

require('file-uploaded-system.php');

echo fileUpload($_FILES['file'],'jpg','jpeg','png','webp','pdf');

?>
