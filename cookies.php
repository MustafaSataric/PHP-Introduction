<?php
echo include'Menu.html';
setcookie("name","DU",time()+86400*31,"y");
if(!isset ($_COOKIE["DU"])){
    Echo "Wilkommen zurück" . $_COOKIE["name"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
 
</html>