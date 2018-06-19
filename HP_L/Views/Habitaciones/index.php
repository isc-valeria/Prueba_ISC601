<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css" rel="stylesheet"/>

<div class="row">
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
        <input type="number" min="1" max="20" class="niños" id="niños" placeholder="Niños"  >
    </div>

</div>
<div class="input-field col s12">
    <a href="#!" id="update_habitaciones_ok" class="btn modal-close " data-id="">Buscar</a>


</div>

<script>
    $('.datepicker').pickadate({
        min: new Date(),
        format: 'yyyy-mm-dd',
    });
    var inicio = $('#inicio').pickadate(),
        inicio_picker = inicio.pickadate('picker')

    var final = $('#final').pickadate(),
        final_picker = final.pickadate('picker')

    // Check if there’s a “from” or “to” date to start with.
    if (inicio_picker.get('value')) {
        final_picker.set('min', inicio_picker.get('select'))
    }
    if (final_picker.get('value')) {
        inicio_picker.set('max', final_picker.get('select'))
    }

    // When something is selected, update the “from” and “to” limits.
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
            ///console.log(inicio.diff(final, 'days'), ' dias de diferencia');

        } else if ('clear' in event) {
            inicio_picker.set('max', false)
        }
    })

    $("#update_habitaciones_ok").click(function(){
        var fecha1 = moment('2016-07-12');
        var fecha2 = moment('2016-08-1');
        var mensa;
        alert(fecha1);
        alert(fecha2);
        mensa=(fecha2.diff(fecha1, 'days'));
        alert(mensa);
    });



</script>
