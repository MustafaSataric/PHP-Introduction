<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';

session_start();
$_SESSION["slogan"]="Hugs are better than Handahakes";
echo $_SESSION["slogan"];
session_unset();
?>

</html>