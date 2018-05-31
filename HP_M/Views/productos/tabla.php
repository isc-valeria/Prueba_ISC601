<?php
//$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
                    echo "<tr><td>{$row[0]}</td>
                    <td>{$row['nombre_pro']}</td>
                    <td>{$row['descripcion_cat']}</td>
                    <td>{$row['descripcion_pro']}</td>
                    <td>{$row['existencias']}</td>
                    <td>{$row['stock_max']}</td>
                    <td>{$row['stock_min']}</td>
                    <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                    <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td></tr>";
?>