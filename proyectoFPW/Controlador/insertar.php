<?php
require_once('..//Modelo/conexion.php');
require_once('..//Modelo/consultas.php');
$mensaje=null;
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$RUC=$_POST['RUC'];
$consultas=new consultas();
$mensaje=$consultas->insertar($nombre,$telefono,$RUC);
echo "<a href='..//Vista/insertar.html'> Persona registrada  </a>";

echo $mensaje;
?>

