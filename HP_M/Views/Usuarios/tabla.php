<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['email']}</td>
    <td>{$row['pass']}</td>
    <td>{$row['id_empleado']}</td>
    
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_usuario']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_usuario']}' href='#!'></a></td></tr>";
?>

