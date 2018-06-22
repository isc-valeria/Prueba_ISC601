<div class="card-panel">
    <h4 align="center"></h4>
    <div class="divider"></div>
    <h3 class="center">Check in</h3>
    <nav>
        <div class="nav-wrapper  light-green lighten-1 " >
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">Simple </a></li>
                <li><a href="badges.html">Piso 2</a></li>
                <li><a href="collapsible.html">Piso 3 </a></li>
            </ul>
        </div>
    </nav><div class="row">
        <div class="col s2 m2">
            <div class="card">
                <div class="card-image">
                    <span class="card-title">Card Title</span>
                </div>
                <div align="center" class="card-content">
                    <p>Habitación</p>
                </div>
                <div class="card-action">
                    <a href="#modal_ver" id="ver" class="btn modal-trigger">Ver</a>

                </div>
            </div>
        </div>
    </div>
    <div id= "modal_ver" class="modal">
        <div class="modal-content">
            <h5>Tipos de habitaciones</h5>

            <p>
                <input id="aaa" type="text" name= "aaa" >
                <label id="aaa" name= "aaa" ></label>

            </p>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function(){

        $('select').material_select();
        $(".modal").modal();
        $("#ver").on("click",function(){
            var id= 150;
            $.get("<?php echo URL?>checkin/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#aaa").data("id",datos["id_habitacion"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_ver").modal("open");
            });
        });
        /*$("#update_habitaciones_ok").click(function(){
            var id=$(this).data("id");
            $.post("<///?php echo URL?>habitaciones/actualizar/"+id,$("#save_habitacion").serialize(),function(res){
                $('#save_habitacion').find('input, select, textarea').val('');
                $("#body_table").empty().append(res);
                Materialize.updateTextFields();
                Materialize.toast('Se ha modificado correctamente', 2500);
            })
        });*/
    });
</script>





</div>

