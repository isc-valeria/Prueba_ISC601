<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr>
	<td>{$row['id_asignaser']}</td>
	<td>{$row['num_habitacion']}</td>
	<td>{$row['descripcion_ser']}</td>
    <td>{$row['descripcion_est']}</td>
    <td>{$row['fecha_reg']}</td>
            <td><a class=\"btn-flat modal-trigger icon-cross red-text btn_eliminar  \" href='#!' data-id='{$row['id_asignaser']}' ></a></td>
	<td><a class='btn-flat modal-trigger icon-pencil blue-text' href='#!'></a></td>
    </tr>";
//Notice: Undefined index: id_servicios in C:\xampp2\htdocs\Prueba_ISC601\HP_M\Views\Asignacion_de_servicios\tabla.php on line 6