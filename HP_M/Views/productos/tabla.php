<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row[0]}</td>
                  
                    <td>{$row['nombre_pro']}</td>
                    <td>{$row['descripcion_cat']}</td>
                    <td>{$row['descripcion_pro']}</td>
                    <td>{$row['stock_min']}</td>
                  <td>{$row['stock_max']}</td>
                     <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_producto']}'></a></td>
                     <td><a class='btn-flat modal-trigger icon-pencil blue-text btn_modificar' href='#!' data-id='{$row['id_producto']}'></a></td>
                     </tr>";
?>