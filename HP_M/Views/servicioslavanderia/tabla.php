<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 14/06/2018
 * Time: 08:55 AM
 */


$dato=$datos["servicio"];
//$datos["servicio"]->free();
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['descripcion_servicio']}</td>
        <td><label >$</label> {$row['precio']}</td>
        <td><a class='btn-flat icon-checkmark2 green-text btn-estado' href='#!' data-id='{$row['id_serviciolav']}'></a></td>
                                  
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_serviciolav']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_serviciolav']}' href='#!'></a></td></tr>";
$dato->data_seek(0);
?>
