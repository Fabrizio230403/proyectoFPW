<?php
   $user="root";
   $pass="admin";
   $servidor="localhost";
   $db="proyectofinal";

    try{
    $conexion= new PDO("mysql:host=$servidor;dbname=$db;",$user,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"Conexion realiza exitosamente";
    }catch(PDOException $e){
        echo"Conexion fallida".$e->getMessage();
    }

    $conexion=null;
    ?>