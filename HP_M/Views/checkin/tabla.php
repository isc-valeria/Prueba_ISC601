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
        
        <td><a class='btn-flat blue-text btn_mostrar' data-id='{$row['clave_reserva']}' href='#!'><i class='material-icons'>remove_red_eye</i></td>
    </tr>  
    
";
}