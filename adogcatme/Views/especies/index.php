<?php

echo "<h1 class='center'>Especies</h1>";

$msg=isset($_GET['msg'])?"Se Guardo Exitosamente":"";
echo "<h3 class='center green-text'>{$msg}</h3>";

?>
<table id="tabla1">
    <tr>
        <th>Id</th>
        <th>Descripcion</th>
    </tr>

    <?php
    $cont=1;
    while($row=mysqli_fetch_array($datos))
    {
        echo "<tr><td>{$cont}</td><td>{$row['especies_des']}</td>
        <td><a href='".URL."especies/modificar/{$row[0]}' class='btn'><i class='material-icons'>edit</i></a></td>
        <td><a href='".URL."especies/eliminar/{$row[0]}' class='btn tooltipped' data-position='bottom' data-tooltip='Eliminar'><i class='material-icons'>delete</i></a></td></tr>";
        $cont++;
    }
    ?>
</table>
<script type="text/javascript">
    console.log("ok")

    $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});

        $("#btn_agregar_eh").click(function (){
            //alert("ok")
            $("#cont_modal").load("<?php echo URL?>especies/crear");
        })
    });
</script>
