<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>

<?php
echo include'Menu.html';
#Logische Operatoren Trus&False
$bedingung = true;
$bedingung2 =true;
# man kann statt or, and schreiben dann müssen beide true sein
$bed       = ($bedingung or $bedingung2);
var_dump($bed);
echo           "<br><br>";








?>

</html>