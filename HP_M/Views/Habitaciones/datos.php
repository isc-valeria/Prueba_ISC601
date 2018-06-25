<?php
$datos1=$datos[0];
while ($row=mysqli_fetch_array($datos1))
{
    echo "
    <tr>
        <td>{$row[0]}</td>
        <td>{$row[1]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
        <td>{$row[4]}</td>
        <td>{$row[5]}</td>
        <td>{$row[6]}</td>
        <td>{$row[7]}</td>
        <td>{$row[8]}</td>
        <td>{$row[9]}</td>
        <td>{$row[10]}</td>
        <td>{$row[11]}</td>
        <td>{$row[12]}</td>
        <td>{$row[13]}</td>
        <td>{$row[14]}</td>
        <td>{$row[15]}</td>
        <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['clave_reserva']}'></td>
        <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['clave_reserva']}' href='#!'></td>
    </tr>  
    
";
}