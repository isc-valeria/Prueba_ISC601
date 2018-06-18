<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 18/06/2018
 * Time: 10:42 AM
 */
$dato=$datos[2];
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['descripcion_servicio']}</td>       
        <td>{$row['cantidadkg']}</td>
        <td>{$row['descripcion_observacion']}</td>               
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_clasificacionkilo']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_clasificacionkilo']}' href='#!'></a></td></tr>";
?>