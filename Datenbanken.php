<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 
<?php
echo include'Menu.html';
$Servername ="localhost";
$User ="root";
$pw="";
$db="User";
$con=new mysqli($Servername,$User,$pw,$db);

if($con -> connect_error){
    die("Alles zu Spät Ralpfh ist Tot" . $con ->connect_error);
}
$sql="insert into User (name, password) VALUES('Bruce Wayne','I like beats')";
if($con-> query($sql)===True){
    echo"Es lebt";}
else{
    echo"Es ist Tot". $con->error;
}


?>

</html>