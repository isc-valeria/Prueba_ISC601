<?php
$datos1=$datos[0];
while ($row=mysqli_fetch_array($datos1))
    echo "
                        <tr>
                        <td>{$row[0]}</td>
                        <td>{$row[1]}</td>
                        <td>{$row[2]}</td>
                        <td>{$row[3]}</td>
                        <td>{$row[4]}</td>
                        <td><a class=\"btn-flat modal-trigger icon-cross red-text\" href=\"#modal_eliminar\"></a></td>
                        <td><a class=\"btn-flat modal-trigger  icon-pencil blue-text\" href=\"#modal_editar\"></a></td>
        <td> <a href=\"Facturacion\print_pdf\" target=\"_blank\" id=\"imprimir_pdf\" class=\"btn cyan lighten-2 accent-3 black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Imprimir\"><i class=\"material-icons\">attach_money</i></a></td>




                        </tr>
                        ";
?>