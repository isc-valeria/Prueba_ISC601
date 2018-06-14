<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 13/06/2018
 * Time: 10:07 AM
 */
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['descripcion_servicio']}</td>
        <td>{$row['precio']}</td>
                                  
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#modal_eliminar' data-id='{$row['id_serviciolav']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_serviciolav']}' href='#!'></a></td></tr>";
?>