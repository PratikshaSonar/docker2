<?php
$dat = $_POST['first_name'];
$fileHandle=fopen("data.txt","a+");
fwrite($fileHandle,$dat);
fwrite($fileHandle,"\n");
fclose($fileHandle);
?>
