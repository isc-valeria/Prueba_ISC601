<?php

// print_r($datos);
$dato2=$datos[0];
$dato2->data_seek(0);
while($row=mysqli_fetch_assoc($dato2))
    echo "<tr>
    <td>{$row['id_factura']}</td>
    <td>{$row['id_asignares']}</td>
    <td>{$row['total']}</td>
    
  
    <td><a class='btn-flat icon-cross red-text btn_eliminar' href='#!' data-id='{$row['id_factura']}'></a></td>
    <td><a class='btn-flat icon-pencil blue-text btn_modificar ' data-id='{$row['id_factura']}' href='#!'></a></td>
    <td> <a href=\"Facturacion/print_pdf\" target=\"_blank\" id=\"imprimir_pdf\" class=\"btn  cyan lighten-2 accent-3 black-text tooltipped\" data-position=\"bottom\" data-delay=\"50\" data-tooltip=\"Factura\"><i class=\"material-icons\">attach_money</i></a></td>
</tr>";



