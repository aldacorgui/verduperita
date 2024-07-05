<?php

$nombre= $_POST['nombre'];
$email= $_POST['email'];
$mensaje=$_POST['mensaje'];


$conexion= mysqli_connect('localhost','root','','php_inicial_487') or exit ("No se pudo conectar a la base de dato");

mysqli_query($conexion, " INSERT INTO consultas VALUES (DEFAULT,'$nombre','$email','$mensaje')");

mysqli_close($conexion);

header('Location:registrate.php?ok');