<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['descripcion_puesto']}</td>
    
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_puesto']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_puesto']}' href='#!'></a></td></tr>";
?>

