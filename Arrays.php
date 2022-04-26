<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';
#Arrays menge an primitiven Datentypen
$Data = array("f","m");
echo $Data [0]; #0 ist der erste sache im Array
#man kann auch die Anzahl an Arrays aufzählen lassen durch:
echo           "<br><br>";
echo count($Data);
echo           "<br><br>";
#Automatisieren durch for-in-Schleife beide arrays werden ausgegeben
for($i=0; $i < count ($Data);$i++){echo $Data[$i];}
#Assoziative Arrays (kann man nur in for-each-schleife benutzen) 
$parteien =array("Alice" =>20,"Bob" =>50);
echo $parteien ["Alice"];
foreach($parteien as $Key => $wert2){
    echo $Key . "=" . $wert2;
    echo           "<br><br>";
}
$vbn = array("44","5","6","7","33","6","5","4","3","3","2","9");
sort ($vbn);   #wenn das grösste oben stehen soll dann statt sort =rsort
foreach ($vbn as $hjd){
    echo $hjd . "<br>";
}

?>

</html>