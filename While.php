<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>

<?php
echo include'Menu.html';
$B = 34;

#While Schleife (immer währende wiederholung von code wenn bedingung stimmt)
While($B > 5){
    echo" Passt <br><br>";
    $B = $B -10; #vermeidet absturz von Pc Wichtig!!!
}

#Do-While-Schleife wird immer einmal ausgeführt weil do zu beginn steht
do{echo "do-while <br><br>"; $B = $B -10;}while($B > 5);




?>

</html>