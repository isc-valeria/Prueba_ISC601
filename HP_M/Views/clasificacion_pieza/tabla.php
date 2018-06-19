<?php

$dato=$datos[3];
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['descripcion_pieza']}</td>       
        <td>{$row['cantidad']}</td>
        <td>{$row['descripcion_servicio']}</td>   
        <td>{$row['descripcion_observacion']}</td>             
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_clasificacionpieza']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_clasificacionpieza']}' href='#!'></a></td></tr>";
?>