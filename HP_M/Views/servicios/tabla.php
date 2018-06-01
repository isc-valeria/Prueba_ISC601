<?php
while ($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row['0']}</td>
            <td>{$row['descripcion_ser']}</td>
            <td>{$row['hora_inicio']}</td>
            <td>{$row['hora_fin']}</td>
            <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td></tr>";
?>