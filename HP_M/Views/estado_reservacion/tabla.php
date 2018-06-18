<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
    echo "<tr>
    <td>{$row['id_estador']}</td>
    <td>{$row['estador']}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_estador']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar' data-id='{$row['id_estador']}' href='#!'></a></td></tr>";
?>