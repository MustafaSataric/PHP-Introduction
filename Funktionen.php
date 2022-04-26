<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<br><br>
<?php
echo include'Menu.html';
#man kann in Funktionen variablen definieren
function beispiel($n){
    echo $n;
    echo "<br><br>";
}
#zahl bestimmt inhalt von vordefinierter Variable
beispiel(6);
#Defaultparameter = $b
function addieren ($a , $b=34){
    return $a + $b;  #Rückgabewerte
}
echo "Das ergebniss ist " . addieren(52);
echo "<br><br>"; 
#Rekursive Funktionen (endllosschleife,wiederholunsanzahl bestimmen)
function add2($n){
    if($n <1){
        return;
    }
    echo $n;
    echo "<br><br>";
    add2($n-1);     #wichtig sonst stürzt Pc ab.
}
add2(4); #anfangswert


?>

</html>