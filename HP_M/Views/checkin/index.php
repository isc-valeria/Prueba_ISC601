<div class="modal" id="muestreo">
    <div class="modal-content">
        <h3 align="center">Datos de la Reservación</h3>
        <div class="row">
            <div class="col s10 offset-s1">
                <table id="table">
                    <thead>
                    <tr>
                        <th>Clave de Reservación</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Teléfono</th>
                        <th>E-mail</th>
                        <th># Habitación</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Fecha de Reservación</th>
                        <th>Fecha de Llegada</th>
                        <th>Fecha de Salida</th>
                        <th>Numero de Personas</th>
                        <th>Estado de Reservación</th>
                        <th>Cancelar Reservación</th>
                        <th>Modificar Reservación</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $datoss1=$datos[2];
                    while ($row=mysqli_fetch_array($datoss1))
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
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card-panel">

    <h4 align="center"></h4>
    <div class="divider"></div>
    <h3 class="center">Check in<span class="right">
            <a href="tabla.php" class="btn green white-text modal-trigger" id="add_habitacion">
                <i class="material-icons">add</i>
            </a>
        </span></h3>
    <div style="overflow-x: auto">
        <table id="bodytable">
            <thead>
            <tr>
                <th>Clave de Reservación</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Ver datos</th>
            </tr>
            </thead>
            <tbody>
            <?php require_once ("tabla.php");
            ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $(".modal").modal();
    };
    $("#body_table").on("click","a.btn_mostrar",function () {
        var id=$(this).data("id");
        $.get("<?php echo URL?>checkin/getOut"+id,function (res) {
            var datos=JSON.parse(res);
            console.log(res);
            $("#table").empty().append(res);
        })
    })
</script>
