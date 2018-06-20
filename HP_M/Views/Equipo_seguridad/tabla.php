<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row[0]}</td>
    <td>{$row['nombre_equisegu']}</td>
    <td>{$row['descripcion_tipo']}</td>
    <td>{$row['cantidad']}</td>
    <td>{$row['descripcion_estadomantenimiento']}</td>
    
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_equiposegu']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_equiposegu']}' href='#!'></a></td></tr>";
?>

