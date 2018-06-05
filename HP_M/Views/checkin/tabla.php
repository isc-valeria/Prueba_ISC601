<?php

$datos=$datos[0];
while($row=mysqli_fetch_array($datos))
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
                        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></td>
                        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td>
                    </tr>";
?>