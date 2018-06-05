<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row[0]}</td>
                <td>{$row['id_habitacion']}</td>
				<td>{$row['id_servicios']}</td>
    			<td>{$row['id_estados']}</td>
    			<td>{$row['fecha_reg']}</td>
                 <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_asignaser']}'></a></td>
                <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td></tr>";
?>