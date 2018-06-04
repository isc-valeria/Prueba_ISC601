<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row[0]}</td>
                <td>{$row['nombre_emp']}</td>
                <td>{$row['ap_emp']}</td>
                <td>{$row['am_emp']}</td><td>{$row['id_puesto']}</td>
                <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td></tr>";
?>