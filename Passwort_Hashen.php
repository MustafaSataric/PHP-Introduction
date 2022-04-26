<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';

$PASSWORT="12345";
echo hash("sha512",$PASSWORT);
#wirklich sicherer Hash Selber input unterschiedlicher Output
echo "<br>";
$hash= password_hash($PASSWORT, PASSWORD_DEFAULT);
echo $hash;







?>

</html>