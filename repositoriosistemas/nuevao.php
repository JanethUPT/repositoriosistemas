<?php

$c=mysqli_connect('ubuntu24','root','12345');
mysqli_select_db($c,'Personas');


echo "<h1>Publicar</h1>";
echo "De: {$_POST['de']}<br>";
echo "Para: {$_POST['para']}<br>";
echo "Publicacion: {$_POST['pub']}<br>";
$instruccion4="insert into Publicaciones (Publicacion,De,Para) values (
'{$_POST['pub']}','{$_POST['de']}','{$_POST['para']}')";
$r4=mysqli_query($c,$instruccion4);
?>
