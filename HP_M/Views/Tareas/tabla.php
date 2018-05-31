<?php
$dato=$datos[0];
while($row=mysqli_fetch_array($dato))
echo "<tr>
    <td>{$row[0]}</td>
    <td>{$row['descripcion_tarea']}</td>
    <td>{$row['nombre_emp']}</td>
    <td>{$row['num_habitacion']}</td>
    <td>{$row['fecha_inicio']}</td>
    <td>{$row['fecha_fin']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_tarea']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_tarea']}' href='#!'></a></td></tr>";
?>