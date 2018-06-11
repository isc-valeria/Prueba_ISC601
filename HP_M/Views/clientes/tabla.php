<?php

$dat=$datos[0];

while($row=mysqli_fetch_array($dat))
    echo "<tr>
    <td>{$row['nombre_cli']}</td>
    <td>{$row['ap_cli']}</td>
    <td>{$row['am_cli']}</td>
    <td>{$row['telefono']}</td>
    <td>{$row['clave_cli']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_cliente']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_cliente']}' href='#!'></a></td></tr>";

if(isset($datos[1]))
    if($datos[1])echo "<script>Materialize.toast('Se ha insertado correctamente', 2500);</script>";
    else echo "<script>Materialize.toast('Ya existe el cliente', 2500);</script>";

