<?php 

$file=fopen("test.txt","r+");
fwrite($file,$_POST["inhalt"]);
echo readfile("test.txt");



?>