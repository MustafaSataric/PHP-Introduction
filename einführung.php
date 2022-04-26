<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';
#NameDerVariable    Inhalt
$Namevar          ="Hallo Welt";
#Ausgabe       Variable=Ausgabewert
echo           $Namevar;
echo           "<br><br>";
#Abfrage von Zeichen in Variable
var_dump($Namevar);
echo           "<br><br>";
#Arythmetische Operatoren Rechnen
$A = 42;
$B = 34;
$D = $A / $B;
echo $D;
echo           "<br><br>";
#Logische Operatoren Trus&False
$bedingung = true;
$bedingung2 =true;
# man kann statt or, and schreiben dann müssen beide true sein
$bed       = ($bedingung or $bedingung2);
var_dump($bed);
echo           "<br><br>";
#If Bedingungen in (steht die bedingung)
if($bedingung){echo 51; echo           "<br><br>";}
if($A < 30){echo true; echo           "<br><br>";}
else {echo "false"; echo           "<br><br>";}
#Switch Case Statement (alternative zur if-Abfrage)
switch($Namevar){
    case"Hallo Welt";
        echo"Hallo Du! <br><br>";
break;
    case"Hallo";
        echo"Hallo Du! <br><br>";
break;
default:echo "Moin <br><br>";
}
#While Schleife (immer währende wiederholung von code wenn bedingung stimmt)
While($B > 5){
    echo" Passt <br><br>";
    $B = $B -10; #vermeidet absturz von Pc Wichtig!!!
}
#Do-While-Schleife wird immer einmal ausgeführt weil do zu beginn steht
do{echo "do-while <br><br>"; $B = $B -10;}while($B > 5);
#Arrays menge an primitiven Datentypen
$Data = array("f","m");
echo $Data [0]; #0 ist der erste sache im Array
#man kann auch die Anzahl an Arrays aufzählen lassen durch:
echo           "<br><br>";
echo count($Data);
echo           "<br><br>";
#Automatisieren durch for-in-Schleife beide arrays werden ausgegeben
for($i=0; $i < count ($Data);$i++){echo $Data[$i];}
#For-each-Schleife
$Geschlechter =array("f","m");
foreach($Geschlechter as $wert){
    echo           "<br><br>";
    echo $wert;}
#Assoziative Arrays (kann man nur in for-each-schleife benutzen) 
$parteien =array("Alice" =>20,"Bob" =>50);
echo $parteien ["Alice"];
foreach($parteien as $Key => $wert2){
    echo $Key . "=" . $wert2;
    echo           "<br><br>";
}
#Funktionen von Strings
$hjf = "Hello World";
echo strlen ($hjf); #Anzahl an Zeichen
echo           "<br><br>";
echo str_word_count($hjf); #Anzahl an Wörter
echo           "<br><br>";
echo strrev($hjf);          #wort wird verkehrtherum buchstabiert
echo           "<br><br>";
echo str_split($hjf,5)[0];  #nur bestimmte anzah an buchstaben wird angezeigt in [steht welches wort]
echo           "<br><br>";
echo str_replace("Hello","Hi",$hjf); #ersetz wörter
echo           "<br><br>";
#Arrays Sortieren
$vbn = array("44","5","6","7","33","6","5","4","3","3","2","9");
sort ($vbn);   #wenn das grösste oben stehen soll dann statt sort =rsort
foreach ($vbn as $hjd){
    echo $hjd . "<br>";
}
#Loopkontrolle & === & die & exit 
# === identitätskommentator muss auch gleicher Zahlentyp sein
function diex ($jfk){
    die ();               #code dannach funktioniert nicht mehr
    echo $jfk;
    echo           "<br><br>";
}
diex("5");
function dieg ($jfl){
    exit ();               #code dannach funktioniert nicht mehr wie die
    echo $jfl;
    echo           "<br><br>";
}
dieg("5");















?>

</html>