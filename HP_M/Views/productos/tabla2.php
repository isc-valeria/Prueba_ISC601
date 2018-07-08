<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
                  <td>{$row[0]}</td>
                    <td>{$row['nombre_pro']}</td>
                    <td>{$row['fecha_ent']}</td>
            
                     <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_producto']}'></a></td>
                     <td><a class='btn-flat icon-pencil blue-text btn_modificar ' href='#!' data-id='{$row['id_producto']}' ></a></td>";
?>