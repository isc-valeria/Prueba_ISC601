<?php
$dato=$datos[0];

while($row=mysqli_fetch_array($dato))
echo "<tr>
   
    <td>{$row[1]}</td>
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row[0]}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar' data-id='{$row[0]}' href='#!'></a></td></tr>";
?>