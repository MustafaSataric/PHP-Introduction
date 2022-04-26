<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>

<?php
echo include'Menu.html';
$Namevar          ="Hallo Welt";
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



?>

</html>