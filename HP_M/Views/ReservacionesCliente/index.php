<div class="row center-align">
    <div class="col s2">
        <input type="text" class="datepicker" id="inicio" placeholder="Fecha Inicio"  >
    </div>
    <div class="col s2">
        <input type="text" class="datepicker" id="final" placeholder="Fecha Final" >
    </div>
    <div class="col s2">
        <input type="number" min="1" max="20" class="adultos" id="adultos" placeholder="Adultos"  >

    </div>
    <div class="col s2">
        <input type="number" min="0" max="20" class="niños" id="niños" placeholder="Niños"  >
    </div>
    <div class="input-field col s2">
        <a href="#!" id="" class="btn modal-close " data-id="">Buscar</a>
    </div>
</div>

<form>
    <div>
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo URL?>Public/imagenes/simple.jpg" height=270" width="150">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3>Habitacion Simple</h3>
                        <p>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.
                            <br>
                            Tamaño: 20 m²
                            <br>
                            Camas:  1 cama
                            <br>
                            Aloja:  1 persona
                        </p>
                        ..............................................<br>
                        <a class="tooltipped" data-position="bottom" data-tooltip="Aire Acondicionado"><i class="material-icons">ac_unit</i></a>
                        <a class="tooltipped" data-position="bottom" data-tooltip="Wi-Fi"><i class="material-icons"> network_wifi</i></a>
                        <a class="tooltipped" data-position="bottom" data-tooltip="TV"><i class="material-icons"> tv</i></a>
                    </div>
                    <div class="card-action">
                        <a href="">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo URL?>Public/imagenes/doble.jpg" height=270" width="150">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3>Habitacion Doble</h3>
                        <p>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.
                            <br>
                            Tamaño: 20 m²
                            <br>
                            Camas:  1 cama
                            <br>
                            Aloja:  1 persona
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="col s12 m7">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="<?php echo URL?>Public/imagenes/simple.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3>Habitacion Simple</h3>
                        <p>Nuestras Suites Junior ofrecen hermosas vistas de la ciudad.
                            <br>
                            Tamaño: 20 m²
                            <br>
                            Camas:  1 cama
                            <br>
                            Aloja:  1 persona
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>




<script>
    $('.datepicker').pickadate({
        min: new Date(),
        format: 'yyyy-mm-dd',
    });
    var inicio = $('#inicio').pickadate(),
        inicio_picker = inicio.pickadate('picker')

    var final = $('#final').pickadate(),
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
</script>
