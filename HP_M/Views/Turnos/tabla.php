
<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr><td>{$row[0]}</td>
    
    <td>{$row['descripcion_turno']}</td>
      <td>{$row['hr_entrada']}</td>
        <td>{$row['hr_salida']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_turno']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_turno']}' href='#!'></a></td></tr>";
?>

