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
            <a id="buscar" class="btn modal-close blue lighten-5 black-text" data-id="">Buscar</a>
        </div>
    </div>

</div>

<div class="col s2"  id="divnumerodias" style="display: none">
    <h5 class="text-primary black-text" >Dias de Reservacion</h5>
    <h6 id="id_numerodias"></h6>
</div>


<div class="row">
    <div class="col l8 offset-l2 m12 s12">
        <form>
            <div>
                <div class="col ">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="<?php echo URL?>Public/imagenes/simple.jpg" height=270" width="150">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked">
                                <label for="filled-in-box"></label>
                                <h3>Habitacion Simple</h3>
                                <p>Nuestras Habitaciones ofrecen hermosas vistas de la ciudad.
                                    <br>
                                    Tamaño: 20 m²
                                    <br>
                                    Camas:  1 cama
                                    <br>
                                    Aloja:  2 persona
                                    <br>
                                    Costo:  $ 800 por noche
                                </p>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Aire Acondicionado"><i class="material-icons">ac_unit</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Wi-Fi"><i class="material-icons"> network_wifi</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="TV"><i class="material-icons"> tv</i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="col">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="<?php echo URL?>Public/imagenes/doble.jpg" height=270" width="150">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked">
                                <label for="filled-in-box"></label>
                                <h3>Habitacion Doble</h3>
                                <p>Nuestras Suites Junior ofrecen hermos\as vistas de la ciudad.
                                    <br>
                                    Tamaño: 20 m²
                                    <br>
                                    Camas:   2 camas
                                    <br>
                                    Aloja:  4 persona
                                    <br>
                                    Costo:  $ 1000 por noche
                                </p>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Aire Acondicionado"><i class="material-icons">ac_unit</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Wi-Fi"><i class="material-icons"> network_wifi</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="TV"><i class="material-icons"> tv</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="col">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="<?php echo URL?>Public/imagenes/cuadruple.jpg" height=270" width="150">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked">
                                <label for="filled-in-box"></label>
                                <h3>Habitacion Cuadruple</h3>
                                <p>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.
                                    <br>
                                    Tamaño: 20 m²
                                    <br>
                                    Camas:  4 cama
                                    <br>
                                    Aloja:  8 persona
                                    <br>
                                    Costo:  $ 1800 por noche
                                </p>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Aire Acondicionado"><i class="material-icons">ac_unit</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Wi-Fi"><i class="material-icons"> network_wifi</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="TV"><i class="material-icons"> tv</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="col">
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="<?php echo URL?>Public/imagenes/simple.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3>Habitacion Suite</h3>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked">
                                <label for="filled-in-box"></label>
                                <p>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.
                                    <br>
                                    Tamaño: 20 m²
                                    <br>
                                    Camas:  1 cama
                                    <br>
                                    Aloja:  10 persona
                                    <br>
                                    Costo:  $ 2800 por noche
                                </p>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Aire Acondicionado"><i class="material-icons">ac_unit</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="Wi-Fi"><i class="material-icons"> network_wifi</i></a>
                                <a class="tooltipped black-text" data-position="bottom" data-tooltip="TV"><i class="material-icons"> tv</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        suma=num1+num2;

        var dato="";
        dato=fecha2.diff(fecha1, 'days');
        $("#id_numerodias").text(dato+" dias de diferencia");
        $("#divnumerodias").show();
        //alert(dato+" dias de diferencia");
        ///alert(dato+" dias de diferencia");
    });
</script>
