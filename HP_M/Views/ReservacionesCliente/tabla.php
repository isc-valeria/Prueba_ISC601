<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
            <td>{$row['num_habitacion']}</td>
            <td>{$row['descripcion_hab']}</td>
            <td>{$row['maximo_personas']}</td>
            <td>{$row['precio']}</td>
    </tr>";
?>