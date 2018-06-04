<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02/06/2018
 * Time: 09:21 PM
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

        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td> </tr>";
?>
