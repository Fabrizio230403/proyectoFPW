<?php 
require_once('Modelo/conexion.php');
require_once('Modelo/consultas.php');
require_once('Controlador/seleccionar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Actualizar registro</H1>
    <?php
    seleccionar();
    ?>
</body>
</html>