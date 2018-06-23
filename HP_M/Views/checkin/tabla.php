<div class="row">
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
            var id=$(this).data("id");
            $.get("<?php echo URL?>checkin/modificar/"+id,function(res){
                var datos=JSON.parse(res);
                $("#aaa").data("id",datos["id_habitacion"]);
                Materialize.updateTextFields();
                $('select').material_select();
                $("#modal_ver").modal("open");
                console.log(datos["id_habitacion"])

            });
        });


    });
</script>



