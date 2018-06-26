<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
echo "<tr>
    <td>{$row['id_empleado']}</td>
    <td>{$row['fecha_entrada']}</td> 
</td></tr>";
?>