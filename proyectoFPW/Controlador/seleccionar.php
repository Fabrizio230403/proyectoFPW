<?php

function seleccionar(){
if(isset($_GET['IDPer'])){
    $consultas = new consultas();
    $IDPer= $_GET['IDPer'];
    $filas= $consultas->cargarPersona($IDPer);
    foreach ($filas as $fila){
    echo '
        <form action= "Controlador/modificarpersona.php" = method= "post">
        <table>
        <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" placeholder="Nombre" value="'.$fila['nomPer'].'"></td>
        </tr>
        <tr>
        <td>Telefono:</td>    
        <td><input type="text" name="telefono" placeholder="Telefono" value="'.$fila['telPer'].'"></td>
        </tr>
        <tr>
        <td>RUC:</td>    
        <td><input type="text" name="RUC" placeholder="RUC" value="'.$fila['RUC'].'"></td>
	    </tr>
        <tr>
        <td></td>    
        <td><input type="hidden" name="IDPer" placeholder="RUC" value="'.$IDPer.'"></td>
	    </tr>
        <tr>
        <td>&nbsp</td>
        <td><input type="submit" value="Actualizar Personas"></td>
        </tr>
        
    </table>
    </form>
    ';
        }
    }

}

?>
