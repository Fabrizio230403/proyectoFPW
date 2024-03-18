<?php
    class Conexion{
        public function get_conexion(){
            $user="root";
            $pass="admin";
            $host="localhost";
            $db="proyectofinal";
            $conexion=new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
            return $conexion;
            }
            
        }
?>
