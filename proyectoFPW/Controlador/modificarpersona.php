<?php


require_once('../Modelo/conexion.php');
require_once('../Modelo/consultas.php');

$msj = null;
$consultas = new consultas();
$nombre =$_POST['nombre'];
$telefono=$_POST['telefono'];
$RUC =$_POST['RUC'];
$IDPer= $_POST['IDPer'];

if(strlen($nombre) > 0 && strlen($telefono) > 0  &&  strlen($RUC) > 0){
   
    $msj = $consultas->modificarPersona("nomPer", $nombre,$IDPer);
    $msj = $consultas->modificarPersona("telPer", $telefono,$IDPer);
    $msj = $consultas->modificarPersona("RUC", $RUC,$IDPer);
    echo $msj;
    echo "<div><a href='../verproductos.php'>Ver registros</a></div>";
    }else{
        echo "Por favor rellene todos los campos, son obligatorios";
    
    }
?>