<?php

$dat=$datos[0];

while($row=mysqli_fetch_array($dat))
    echo "<tr>
    <td>{$row['tipo_ha']}</td>
    <td>{$row['precio']}</td>
    <td>{$row['maximo_personas']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_tipoh']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_tipoh']}' href='#!'></a></td></tr>";

if(isset($datos[1]))
    if($datos[1])echo "<script>Materialize.toast('Se ha insertado correctamente', 2500);</script>";
    else echo "<script> Materialize.toast('No se ha podido registrar porque el tipo de habitación ya existe', 2500);</script>";

