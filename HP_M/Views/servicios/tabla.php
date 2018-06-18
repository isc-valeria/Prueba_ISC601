<?php
$dat=$datos[0];
while($row=mysqli_fetch_array($dat))
    echo "<tr>
            <td>{$row['id_servicio']}</td>
            <td>{$row['descripcion_ser']}</td>
            <td>{$row['hora_inicio']}</td>
            <td>{$row['hora_fin']}</td>
            <td><a class=\"btn-flat modal-trigger icon-cross red-text btn_eliminar\" href='#!' data-id='{$row['id_servicio']}' ></a></td>
            <td><a class=\"btn-flat modal-trigger icon-pencil blue-text btn_modificar\" href='#!' data-id='{$row['id_servicio']}'></a></td>
            </tr>";

/*if(isset($datos[1]))
    if($datos[1])echo "<script>Materialize.toast('Se ha insertado correctamente', 2500);</script>";
    else echo "<script> Materialize.toast('No se ha podido registrar porque el servicio ya existe', 2500);</script>";
*/
?>