<?php
$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
    echo "<tr>
    <td>{$row[0]}</td>
    <td>{$row[1]}</td>
    <td>{$row[2]}</td>
    <td>{$row[3]}</td>
    <td>{$row[4]}</td>
    <td>{$row[5]}</td>
    <td>{$row[6]}</td>
    <td>{$row[7]}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row[0]}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row[0]}' href='#!'></a></td></tr>";
?>