<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
 

<form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" >
Name:<input type="text" name="name" ><BR>
E-mail:<input type="text" name="email" ><BR>
<input type="submit" ></form>
<br><br><br><br>
<?php
echo include'Menu.html';
    if($_SERVER["REQUEST_METHOD"] ==="POST"){
        echo "Hallo  " . $_POST["name"] . "  der sehnlichst gewünschte Newsletter geht an  " 
        . $_POST["email"];
    }

?>
Validiertte forms
<br>

<?php
#Validiertte forms 
$error = " ";
    if($_SERVER["REQUEST_METHOD"] =="POST"){
    if(empty(htmlspecialchars(trim($_POST["name"])))){
        $error="Der name ist nicht optional.";
    }   
    elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $error="Ungültige Email";}
else{
     echo "Hallo  " . $_POST["name"] . " <br><br> der sehnlichst gewünschte Newsletter geht an  " 
        . htmlspecialchars (stripslashes(trim($_POST["email"])));
    }}

?>

<form action="<?php echo $_SERVER["PHP_SELF"];?> " method="post" >
Name:<input type="text" name="name" ><BR>
E-mail:<input type="text" name="email" ><BR>
<?PHP  echo $error;   ?>
<input type="submit" ></form>


</html>