<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "
                <tr><td>{$row[0]}</td>
                <td>{$row['descripcion_ser']}</td>
                <td>{$row['hora_inicio']}</td>
                <td>{$row['hora_fin']}</td>
                <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td></tr>";
?>