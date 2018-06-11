<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 31/05/2018
 * Time: 09:22 PM
 */
$datos=$datos[1];
while($row=mysqli_fetch_array($datos))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['1']}</td>
        <td>{$row['2']}</td>        
        <td>{$row['descripcion']}</td>
        <td>{$row['descripcion_tela']}</td>
        <td>{$row['descripcion_color']}</td>
        <td>{$row['descripcion_trata']}</td>
        <td>{$row['descripcion_precio']}</td>
                                           
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_registropren']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_registropren']}' href='#!'></a></td></tr>";
?>
