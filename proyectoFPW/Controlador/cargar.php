<?php
function cargar(){
    $consultas = new consultas();
    $filas= $consultas->cargarPersonas();

    echo "<table>
    <tr>
    <th>ID </th>
    <th> Nombre </th>
    <th> Telefono </th>
    <th> RUC </th>
    <tr>";

    foreach($filas as $fila){
        echo "<tr>";
        echo "<td>".$fila['IDPer']."</td>";
        echo "<td>".$fila['nomPer']."</td>";
        echo "<td>".$fila['telPer']."</td>";
        echo "<td>".$fila['RUC']."</td>";
        echo"<td><a href='Controlador/eliminar.php?IDPer=".$fila['IDPer']."'>Borrar</td>";
        echo"<td><a href='modificar.php?IDPer=".$fila['IDPer']."'>Editar</td>";
        echo "</tr>";
        }
        echo "</table>";

    }

    function buscar($nombre){
        $consultas = new consultas();
        $filas= $consultas->buscarPersonas($nombre);
        
            echo "<table>
            <tr>
            <th>ID </th>
            <th> Nombre </th>
            <th> Telefono </th>
            <th> RUC </th>
            <tr>";
        
        if(isset($filas)){
        foreach($filas as $fila){
            echo "<tr>";
            echo "<td>".$fila['IDPer']."</td>";
            echo "<td>".$fila['nomPer']."</td>";
            echo "<td>".$fila['telPer']."</td>";
            echo "<td>".$fila['RUC']."</td>";
            echo"<td><a href='Controlador/eliminar.php?IDPer=".$fila['IDPer']."'>Borrar</td>";
            echo"<td><a href= 'modificar.php?IDPer=".$fila['IDPer']."'>Editar</td>";
            echo "</tr>";
        }
            
    }
            echo "</table>";
        
}

?>