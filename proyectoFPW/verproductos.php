<?php 
require_once('Modelo/conexion.php');
require_once('Modelo/consultas.php');
require_once('Controlador/cargar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Personas registradas</h1>
    <div>
        <form method="get">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
            <br><br>
        <form>
    </div>
    <?php 
    if(isset($_GET['buscar'])){
        buscar($_GET['buscar']);
        }else{
            cargar();
        }
            
    ?>

    <div>
        <br>
        <a href="Vista/insertar.html">Nueva Persona</a></div>
</body>
</html>