<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
    echo "<tr>
    <td>{$row['estado_ha']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_estadoh']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar' data-id='{$row['id_estadoh']}' href='#!'></a></td></tr>";

if(isset($datos[1]))
    if($datos[1])echo "<script>Materialize.toast('Se ha registrado correctamente', 2500);</script>";
    else echo "<script> Materialize.toast('No se ha podido registrar porque el estado ya existe', 2500);</script>";