<?php
while($row=mysqli_fetch_array($datos))
    echo "            <tr>
            <td>{$row['0']}</td>
            <td>{$row['descripcion_ser']}</td>
            <td>{$row['hora_inicio']}</td>
            <td>{$row['hora_fin']}</td>
            <td><a class=\"btn-flat modal-trigger icon-cross red-text btn_eliminar  \" href='#!' data-id='{$row['id_servicio']}' ></a></td>
            <td><a class=\"btn-flat modal-trigger icon-pencil blue-text btn_modificar  \" href='#!' data-id='{$row['id_servicio']}'></a></td>
            </tr>";
?>