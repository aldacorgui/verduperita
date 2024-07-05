<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="index.php">Inicio</a>
    <a href="sucursales.php">Sucursales</a>
    <a href="registrate.php">Regístrate</a>
</nav>

<form action="enviar_consulta.php" method="post">
    <label for="nombre"> Nombre</label>
    <input type="text" name="nombre" id="nombre">
    
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    

    <textarea name="mensaje" id="mensaje"></textarea>

    <input type="submit" value="Enviar mensaje">




</form>

<?php if(isset($_GET ['ok'])){
    echo "<h2> Enviado con éxito</h2>" ;
} ?>




</body>
</html>