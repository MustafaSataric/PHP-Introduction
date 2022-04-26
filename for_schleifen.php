<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';
$Data = array("f","m");
#Automatisieren durch for-in-Schleife beide arrays werden ausgegeben
for($i=0; $i < count ($Data);$i++){echo $Data[$i];}
#For-each-Schleife
$Geschlechter =array("f","m");
foreach($Geschlechter as $wert){
    echo           "<br><br>";
    echo $wert;}



?>

</html>