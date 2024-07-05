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

    <h2>Sucursales</h2>

    <div class="sucursales">
       <ul>

        <li> <a href="sucursales.php?nombre=bj">Barrio Jardin</a></li>
        <li> <a href="sucursales.php?nombre=zn">Zona Norte</a></li>
        <li> <a href="sucursales.php?nombre=c">Centro</a></li>

        </ul> 
     </div>

     <?php

     

    if(isset($_GET['nombre'])) {
     $sucursales =$_GET['nombre'];

     switch ($sucursales){
        case "bj" :
            $nombre= "Barrio Jardin" ;
            $direccion="Esta sucursal se encuentra en la calle Valparaiso 3455" ;
        break;
        
        case "zn" :
            $nombre="Zona Norte"; 
            $direccion="Esta sucursal se encuentra en la avenida Nuñez 4567" ;
        break;
        
        case "c" :
            $nombre="Centro"; 
            $direccion="Esta sucursal se encuentra en la calle Jujuy 457";
        break;
        
        default : 
             $direccion="No seleccionaste ninguna sucursal  <br>";



     }

    
?>

<div class="direccion">

<h3><?php echo $nombre ;?> </h3>
<p> <?php echo $direccion ; ?></p>

</div>

<?php } ?>







</body>
</html>