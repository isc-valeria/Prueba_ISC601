<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['clave_reserva']}</td>
    <td>{$row['nombre_cli']}</td>
    <td>{$row['ap_cli']}</td>
    <td>{$row['am_cli']}</td>
    <td>{$row['fecha_reserva']}</td>
    <td>{$row['fecha_llegada']}</td>
    <td>{$row['fecha_salida']}</td>
    <td>{$row['estador']}</td>
    <td style='text-align: center'>{$row['no_personas']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_reservacion']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_reservacion']}' href='#!'></a></td></tr>";
?>