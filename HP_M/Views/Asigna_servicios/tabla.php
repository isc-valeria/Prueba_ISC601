<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr>
	<td>{$row['id_asignaser']}</td>
	<td>{$row['num_habitacion']}</td>
	<td>{$row['descripcion_ser']}</td>
    <td>{$row['descripcion_est']}</td>
    <td>{$row['fecha_reg']}</td>
    <td><a class='btn-flat  icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_asignaser']}' ></a></td>
	<td><a class='btn-flat  icon-pencil blue-text btn_modificar' href='#!' data-id='{$row['id_asignaser']}'></a></td>
    </tr>";
