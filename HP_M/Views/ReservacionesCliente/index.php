<script src="http://momentjs.com/downloads/moment.min.js"></script>
<div class="row">
    <div class="col l8 offset-l2 m12 s12">
        <div class=" col s3 ">
            <input type="text" class="datepickerFI " id="id_inicio" placeholder="Fecha Inicio"  >
        </div>
        <div class="col s3">
            <input type="text" class="datepicker" id="id_final" placeholder="Fecha Final" >
        </div>
        <div class="col s2">
            <input type="number" min="1" max="20" class="adultos" placeholder="Adultos"  id="comboadultos">

        </div>
        <div class="col s2">
            <input type="number" min="0" max="20" class="niños" placeholder="Niños"  id="comboniños">
        </div>
        <div class="input-field col s2">
            <a id="buscar" class="btn modal-close blue lighten-5 black-text" data-id="" href="#!">Buscar</a>
        </div>
    </div>
    <div class="col l8 offset-l2 m12 s12">
        <div class="col s2.7"  id="divnumerodias" style="display: none">
            <h5 class="text-primary black-text" >Dias de Reservacion:</h5>
        </div>
        <div class="col s6">
            <h5 id="id_numerodias"></h5>
        </div>
    </div>
</div>

<div class="row" id="id_tipo">
    <div class="col l8 offset-l2 m12 s12">
        <form id="muestra">
                <?php
                require_once ("tabla.php");
                ?>
        </form>
    </div>
</div>



<script type="text/javascript">
    $('.datepickerFI').pickadate({
        min: new Date(),
        format: 'yyyy-mm-dd',
    });
    var inicio = $('#id_inicio').pickadate(),
        inicio_picker = inicio.pickadate('picker')

    var final = $('#id_final').pickadate(),
        final_picker = final.pickadate('picker')

    if (inicio_picker.get('value')) {
        final_picker.set('min', inicio_picker.get('select'))
    }
    if (final_picker.get('value')) {
        inicio_picker.set('max', final_picker.get('select'))
    }

    inicio_picker.on('set', function(event) {
        if (event.select) {
            final_picker.set('min', inicio_picker.get('select'))
        } else if ('clear' in event) {
            final_picker.set('min', false)
        }
    })
    final_picker.on('set', function(event) {
        if (event.select) {
            inicio_picker.set('max', final_picker.get('select'))

        } else if ('clear' in event) {
            inicio_picker.set('max', false)
        }
    })

    $(document).ready(function(){
        $('.tooltipped').tooltip();


    });

    $("#buscar").click(function(){
        var fecha1 = moment($("#id_inicio").val());
        var fecha2 = moment($("#id_final").val());

        var num1=0;
        var num2=0;
        var suma=0;
        num1=parseInt($("#comboadultos").val());
        num2=parseInt($("#comboniños").val());
        //alert(num1+": num1");
        //alert(num2+": num2");
        suma=num1+num2;

        alert(suma+": suma");
        var dato="";
        dato=fecha2.diff(fecha1, 'days');
        $("#id_numerodias").text(dato+" dias de diferencia");
        $("#divnumerodias").show();
        //alert(dato+"dias de diferencia");


        $.get("<?php echo URL?>reservacionescliente/consulta",function(res){
            $("#muestra").empty().append(res);
            console.log(res);
        }) 


    });
</script>
