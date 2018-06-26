<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr>
    <td>{$row['nombre_emp']}</td>
    <td>{$row['ap_emp']}</td>
    <td>{$row['am_emp']}</td>
    <td>{$row['descripcion_puesto']}</td>
        <td>{$row['descripcion_turno']}</td>
        <td>{$row['hr_entrada']}</td>
        <td>{$row['hr_salida']}</td>
                <td>{$row['codigo']}</td>
        
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_empleado']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_empleado']}' href='#!'></a></td></tr>";
?>