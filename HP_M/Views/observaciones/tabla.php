<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15/06/2018
 * Time: 08:11 PM
 */
$dato=$datos["observaciones"];
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['descripcion_observacion']}</td>
        <td>{$row['cargo']}</td>
                                  
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_observacion']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_observacion']}' href='#!'></a></td></tr>";
$dato->data_seek(0);
?>