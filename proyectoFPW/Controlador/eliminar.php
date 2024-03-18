<?php
require_once('../Modelo/conexion.php');
require_once('../Modelo/consultas.php');


if(isset($_GET['IDPer'])){
    $IDPer = $_GET['IDPer'];
    $consultas = new consultas();
    $mensaje = $consultas-> eliminarProducto($IDPer);
    echo $mensaje;
    echo "<div><a href= '../verproductos.php'>Regresar al registro</a></div>";

  }
?>