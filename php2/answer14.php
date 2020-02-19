<?php
$path = 'www.abhinesh.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 
?>
