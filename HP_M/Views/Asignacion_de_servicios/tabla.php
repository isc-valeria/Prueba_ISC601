<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr><td>{$row[0]}</td>
	<td>{$row['id_habitacion']}</td>
	<td>{$row['id_servicios']}</td>
    <td>{$row['id_estados']}</td>
    <td>{$row['fecha_reg']}</td>
    <td><a class='btn-flat modal-trigger icon-cross red-text' href='#modal_eliminar></a></td>
    </tr>";
//Notice: Undefined index: id_servicios in C:\xampp2\htdocs\Prueba_ISC601\HP_M\Views\Asignacion_de_servicios\tabla.php on line 6
?>