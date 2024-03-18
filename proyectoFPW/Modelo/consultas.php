<?php 

class consultas{
    public function insertar($arg_nombre,$arg_telefono,$arg_RUC){
        $modelo=new Conexion();
        $conexion=$modelo->get_conexion();
        $sql="insert into persona(nomPer,telPer,RUC)
        values (:nombre,:telefono,:RUC)";
        $statement=$conexion->prepare($sql);
        $statement->bindParam(':nombre',$arg_nombre);
        $statement->bindParam(':telefono',$arg_telefono);
        $statement->bindParam(':RUC',$arg_RUC);

        if(!$statement){
            return "Persona no registrada";
        }else{
            $statement->execute();
            return "Persona registrada correctamente";


        }
    }

public function cargarPersonas(){
    $rows=null;
    $modelo = new Conexion();
    $Conexion=$modelo->get_conexion();
    $sql="select * from persona";
    $statement=$Conexion->prepare($sql);
    $statement->execute();
    while ($result=$statement->fetch()){
        $rows[]=$result;
        
    }
    return $rows;
    }
    
    public function eliminarProducto($arg_IDPer){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "delete from persona where IDPer=:IDPer";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':IDPer',$arg_IDPer);
        if(!$statement){
            return "No fue eliminada la persona";
            }else{
                $statement->execute();
                return "La persona fue eliminada";

            }
        }
        public function buscarPersonas($arg_nombre){
            $rows=null;
            $modelo = new Conexion();
            $Conexion=$modelo->get_conexion();
            $nombre = "%". $arg_nombre."%";
            $sql="select * from persona where nomPer like :nombre";
            $statement=$Conexion->prepare($sql);
            $statement->bindParam(":nombre",$nombre);
            $statement->execute();
            while ($result=$statement->fetch()){
                $rows[]=$result;
                
            }
            return $rows;

        }

        public function cargarPersona($arg_IDPer){
            $rows=null;
            $modelo = new Conexion();
            $Conexion=$modelo->get_conexion();
            $sql="select * from persona where IDPer= :IDPer";
            $statement=$Conexion->prepare($sql);
            $statement->bindParam(":IDPer",$arg_IDPer);
            $statement->execute();
            while ($result=$statement->fetch()){
                $rows[]=$result;
                
            }
            return $rows;


        }
        public function modificarPersona($arg_campo,$arg_valor,$arg_IDPer){
            $modelo = new Conexion();
            $Conexion=$modelo->get_conexion();
            $sql ="update persona set $arg_campo = :valor where IDPer = :IDPer";
            $statement = $Conexion->prepare($sql);
            $statement->bindParam(":valor",$arg_valor);
            $statement->bindParam(":IDPer",$arg_IDPer);
            if(!$statement){
                return "No fue modificado el registro";
            }else{
                $statement->execute();
                return "Registro modificado correctamente";
              }
            
        }
  
    }
?>