<?php

$dato=$datos[4];
while($row=mysqli_fetch_array($dato))
    echo "
        <tr>
        <td>{$row[0]}</td>
        <td>{$row['num_habitacion']}</td>       
        <td>{$row['cantidadkg']}</td>
        <td>{$row['total']}</td>   
        <td>{$row['subtotal']}</td>             
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_ventahabkilo']}'></a></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_ventahabkilo']}' href='#!'></a></td></tr>";
?>
