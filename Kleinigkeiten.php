<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';
#datum und uhrzeit 
echo date("d. m . Y");


echo           "<br><br>";
#Loopkontrolle & === & die & exit 
# === identitätskommentator muss auch gleicher Zahlentyp sein
function diex ($jfk){
    
echo           "<br><br>";
    die ();               #code dannach funktioniert nicht mehr
    echo $jfk; 
}echo           "<br><br>";
diex("5");
function dieg ($jfl){
    exit ();               #code dannach funktioniert nicht mehr wie die
    echo $jfl;
    echo           "<br><br>";
}echo           "<br><br>";
dieg("5");




?>

</html>