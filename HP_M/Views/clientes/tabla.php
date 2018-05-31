<?php
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row['nombre_cli']}</td>
    <td>{$row['ap_cli']}</td>
    <td>{$row['am_cli']}</td>
    <td>{$row['telefono']}</td>
    <td>{$row['clave_cli']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_cliente']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_cliente']}' href='#!'></a></td></tr>";
?>