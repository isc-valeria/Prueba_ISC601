<?php

$dat=$datos[0];

while($row=mysqli_fetch_array($dat))
    echo "<tr>
    <td>{$row['id_factura']}</td>
    <td>{$row['id_asignares']}</td>
    <td>{$row['total']}</td>
  
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_factura']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_factura']}' href='#!'></a></td></tr>";

if(isset($datos[1]))
    if($datos[1])echo "<script>Materialize.toast('Se ha insertado correctamente', 2500);</script>";
    else echo "<script> Materialize.toast('No se ha podido registrar porque el cliente ya existe', 2500);</script>";


