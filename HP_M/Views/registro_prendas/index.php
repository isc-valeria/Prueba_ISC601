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
                <th>Estado prenda</th>
                <th>Tela</th>
                <th>Color</th>
                <th>Tratamiento</th>
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
<div class="card-panel">
    <div class="row" id="contenedor">

    </div>
</div>

<!-- /////////////////////MODALES--------//////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<div id="modal_servicios" class="modal modal_c">
    <div class="modal-content">
        <div class="card">
        <ul id="tabs-swipe-demo" class="tabs black-text">
            <li class="tab col s3"><a class="active black-text" href="#test-swipe-1">Servicios de Lavanderia</a></li>
            <li class="tab col s3"><a href="#test-swipe-2">Lista de Precios</a></li>
        </ul>
        <div class="divider"></div>
        <div id="test-swipe-1" class="col s12 white">nuevo registro de servicios de lavandería</div>
        <div id="test-swipe-2" class="col s12 white">Test 2</div>
        </div>
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
<!-- //////////////////////////////////////////////////////////////////////////// -->
<script type="text/javascript">
    $(document).ready(function(){
        $('select').material_select();
        $('.datepicker').pickadate();
        $(".modal").modal();
        $("#add_prendas").click(function(){
            $("#update_Lavanderia_ok").hide();
            $("#save_Lavanderia_ok").show();
        });
    });
    ///////////////////////////////////////////////////
    $(document).ready(function(){
        $('#tabla_prin').pageMe({
            pagerSelector:'#myPager',
            activeColor: 'blue',
            prevText:'Anterior',
            nextText:'Siguiente',
            showPrevNext:true,
            hidePageNumbers:false,
            perPage:3
        });
    });
    ///////////////////////////////////////////////////funcion buscar


</script>
<!-- //////////////////////////////////////////////////////////////////////////// -->



