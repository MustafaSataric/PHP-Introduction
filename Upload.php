<?php
#die(ini_get('upload tmp dir')? ini_get('upload tmp dir'):sys_get_temp_dir()); gibt aus wo der upload stattfindet
#Hochladen von dateien
/* 
$ziel ="/opt/lampp/htdocs/PHp/uploads/";
$zieledatei=$ziel. basename($_FILES["DateiZumHochladen"]["name"]);
if(move_uploaded_file($_FILES["DateiZumHochladen"]["tmp_name"], $zieledatei)){
    echo"Datei Erfolgreich Hochgeladen";}
else {echo"Fehlgeschlagen";}
*/

#File Upload prüfen nur einmal hochladen lassen nur Bilder Zulassen
if(isset($_POST["submit"])){
$ziel="/opt/lampp/htdocs/PHp/uploads/";
$zieledatei=$ziel . basename($_FILES["DateiZumHochladen"]["name"]);
$error = 0;


$imagesize= getimagesize($_FILES["DateiZumHochladen"]["tmp_name"]);

if($imagesize === false){
    $error=1;}
else{
    $imagesize["mime"];}

$endung=pathinfo($zieledatei, PATHINFO_EXTENSION);

if($endung != "jpg" && $endung != "jpeg" && $endung != "png" && $endung != "pneg")
{
    $error=1;}
if($_FILES["DateiZumHochladen"]["size"]>2*1024*1024)
{ 
    $error=1; }
if(move_uploaded_file($_FILES["DateiZumHochladen"]["tmp_name"], $zieledatei)){
    echo"Datei Erfolgreich hochgeladen";}
else{
    echo"Fehler";}
}

?>