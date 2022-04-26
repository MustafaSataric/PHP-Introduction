<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
<
<?php
echo include'Menu.html';
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


?>

</html>