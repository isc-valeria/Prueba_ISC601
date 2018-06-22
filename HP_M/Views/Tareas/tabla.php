<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
    echo "<tr>
    <td>{$row[1]}</td>
    <td>{$row[2]} {$row[3]} {$row[4]}</td>
    <td>{$row[5]}</td>
    <td>{$row[6]}</td>
    <td>{$row[7]}</td>
    <td>{$row[8]}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_tarea']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar' data-id='{$row['id_tarea']}' href='#!'></a></td></tr>";
?>
