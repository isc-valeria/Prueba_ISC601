<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr><td>{$row[0]}</td>
    <td>{$row['num_habitacion']}</td>
    <td>{$row['descripcion_hab']}</td>
    <td>{$row['tipo_ha']}</td>
    <td>{$row['estado_ha']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_habitacion']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_habitacion']}' href='#!'></a></td></tr>";
?>