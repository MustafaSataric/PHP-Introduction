<!DOCTYPE html>
<html>
<head>
    <title>Einführung</title>
</head>
<body>
 <?php
echo include'Menu.html';

 ?>
    
<form action="Upload.php" method="post" enctype="multipart/form-data" >
    File:<input type="file" name="DateiZumHochladen" id="DateiZumHochladen" ><BR>
    <input type="submit" value="Upload!!!" ></form>
    <br><br><br><br>

<form action="Upload1.php" method="post" >
Inhalt<input type="text" name="inhalt" ><BR>
<input type="submit" ></form>
<br><br><br><br>
    
</body>
</html>