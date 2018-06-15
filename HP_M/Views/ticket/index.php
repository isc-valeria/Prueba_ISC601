<!-- //////////////////////////////////////////////////////////////////////////// -->
<div>
    <div class="row"></div>
    <div class="col s12"><div class="row"></div></div>
    <div class="row">
        <div class="col s12 m6 l3">
            <div class="card #26c6da cyan lighten-1 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">local_laundry_service</i>
                        </a>
                        <p class="center">Servicios Hoy</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>1</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #00bcd4 cyan white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">priority_high</i>
                        </a>
                        <p class="center">Pendientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>8</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #00acc1 cyan darken-1 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">playlist_add_check</i>
                        </a>
                        <p class="center">Entregados</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>4</p></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card #0097a7 cyan darken-2 white-text">
                <div class="padding-4">
                    <div class="col s7 m7">
                        <a class="btn-floating btn-large disabled #00bfa5">
                            <i class="material-icons">people_outline</i>
                        </a>
                        <p class="center">Clientes</p>
                    </div>
                    <div class="col s5 m4 right-align">
                        <h4><p>13</p></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->





<div class="card-panel">
    <div class="row">
        <div>
            <a href="#modal_servicios" class="btn #7bb1b3 white-text modal-trigger" id="add_servicios">
                Servicios
            </a>
            <a href="#modal_orden" class="btn #7bb1b3 white-text modal-trigger" id="add_orden">
                Orden de Trabajo
            </a>
            <a href="#modal_reportes" class="btn #7bb1b3 white-text modal-trigger" id="add_orden">
                Reportes
            </a>
        </div>
        <div class="row"></div>
        <div class="divider"></div>
        <div class="input-field col s4 offset-s8">
            <i class="mdi-action-verified-user prefix icon-search"></i>
            <input id="search" placeholder="Buscar" type="text">
        </div>
        <table class="responsive-table" id="tabla_prin">
            <thead>
            <tr>
                <th>Id</th>
                <!--<th>Número habitación</th> -->
                <th>Fecha recepción</th>
                <th>Fecha entrega</th>
                <th>Habitación</th>
                <th>Cantidad</th>
                <th>Servicio</th>
                <th>Precio</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody id="body_table">
            <?php
            require_once ("tabla.php");
            ?>
            </tbody>
        </table>
        <div id="container"></div>
        <div class="col-md-12 center text-center">
            <span class="left" id="total_reg"></span>
            <ul class="pagination pager" id="myPager"></ul>
        </div>
    </div>
</div>


<!-- /////////////////////MODALES--------//////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="modal_servicios" class="modal modal_c">
    <div class="modal-content">
        <form action="" id="sava_servicioslav" enctype="multipart/form-data" autocomplete="off">
            <ul id="tabs-swipe-demo" class="tabs black-text">
                <h4 align="center">Servicios lavanderia</h4>
            </ul>
            <div class="divider"></div>
            <code class="language-markup" ></code>
            <div id="test-swipe-1" class="col s12 white">
                <div class="card-panel">

                    <div class="input-field col s4 offset-s0">
                        <i class="mdi-action-verified-user prefix icon-search"></i>
                        <input id="search" placeholder="Buscar" type="text">
                    </div>


                    <div class="row">
                        <div>
                            <a href="#modal_servicios_agregar" class="btn green white-text modal-trigger right" id="add_servicios">
                                Agregar
                            </a>
                        </div>

                        <table class="responsive-table" id="tabla_servicio">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del Servicio</th>
                                <th>Precio</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                            </thead>
                            <tbody id="body_table_ser">
                            <?php
                                require_once ("tabla_servicios.php")
                            ?>
                            </tbody>

                        </table>
                        <div id="container"></div>
                        <div class="col-md-12 center text-center">
                            <span class="left" id="total_reg"></span>
                            <ul class="pagination pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="test-swipe-2" class="col s12 white">Test 2</div>
    </div>
</div>





<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="modal_orden" class="modal modal_c">
    <div class="modal-content">
        <div class="card">
            <ul id="tabs-swipe-demo" class="tabs black-text">
                <li class="tab col s3"><a class="active black-text" href="#test-swipe-1">Nueva Orden</a></li>
                <li class="tab col s3"><a href="#test-swipe-2">Lista de Orden</a></li>
                <li class="tab col s3"><a href="#test-swipe-3">Gastos</a></li>
            </ul>
            <div class="divider"></div>
            <div id="test-swipe-1" class="col s12 white">Nueva Orden</div>
            <div id="test-swipe-2" class="col s12 white">Test 2</div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="modal_servicios_agregar" class="modal">
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                  <form action="" id="save_servicio_lavanderia" enctype="multipart/form-data" autocomplete="off">
                        <h4>Nuevo servicio</h4>
                        <div class="divider"></div>
                        <div class="input-field input-field col s5 center">
                            <input id="nombre_servi" type="text" class="validate" name="nombre_servi">
                            <label for="nombre_servi"  data-error="Incorrecto" data-success="Correcto" >Nombre del Servicio</label>
                        </div>

                        <div class="input-field input-field col s5 center">
                            <input id="precio" type="text" class="validate" name="precio">
                            <label for="precio"  data-error="Incorrecto" data-success="Correcto" >Precio</label>
                        </div>

                        <div>
                            <a href="#!" id="save_servicioslav_ok" class="btn green white-text modal-trigger center"">
                                Registrar nuevo servicio
                            </a>
                        </div>
                  </form>
            </div>
        </div>
    </div>
</div>

<div id="modal_eliminar" class="modal">
    <div class="modal-content">
        <h5>¿Desea Eliminar el Registro?</h5>
        <hr />
    </div>
    <div class="modal-footer">
        <a href="#!" id="eliminar_ok" class="modal-close green white-text waves-effect waves-green btn-flat">Aceptar</a>
        <a href="#!" id="cancelar" class="modal-close red white-text waves-effect waves-green btn-flat">Cancelar</a>
    </div>
</div>


<!-- //////////////////////////////////////////////////////////////////////////// -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $(".modal").modal();

        $("#add_servicioslav").click(function(){
            $("#update_Lavanderia_ok").hide();
            $("#save_servicioslav_ok").show();
        });

        $("#save_servicioslav_ok").click(function(){
            //console.log("ok")
            //console.log($("#save_servicio_lavanderia").serialize());
            $.post("<?php echo URL?>ticket/crear",$("#save_servicio_lavanderia").serialize(),function(res){
                $("#tabla_servicios").empty().append(res);
                $('#save_servicio_lavanderia').find('input, select, textarea').val('');
                Materialize.updateTextFields();
                //$("#modal_registro").modal("close");
                Materialize.toast('Se ha insertado correctamente', 2500);
                $("#modal_servicios_agregar").modal("close");
            })
        });

        $("#body_table_ser").on("click","a.btn_eliminar",function(){
            var id=$(this).data("id");
            var url='<?php echo URL?>ticket/eliminar/'+id;
            $("#eliminar_ok").attr("url",url);
            $("#modal_eliminar").modal("open");
        });

        $("#eliminar_ok").click(function(){
            $.get($(this).attr("url"),function(res){
                $("#body_table_ser").empty().append(res);
                Materialize.toast('Se ha eliminado correctamente', 2500);
            });
        });

        $('#body_table').pageMe({
            pagerSelector:'#myPager',
            activeColor: 'blue',
            prevText:'Anterior',
            nextText:'Siguiente',
            showPrevNext:true,
            hidePageNumbers:false,
            perPage:3
        });

        $("#search").keyup(function(){
            _this = this;
            // buscar en tabla
            $.each($("#tabla_prin tbody tr"), function() {
                if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                    $(this).hide();
                else
                    $(this).show();
            });
        });
    });
</script>
<!-- //////////////////////////////////////////////////////////////////////////// -->



