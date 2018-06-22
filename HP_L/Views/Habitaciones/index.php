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
        <input type="number" min="0" max="20" class="niños" id="niños" placeholder="Niños"  >
    </div>
    <div class="input-field col s2">
        <a href="#!" id="" class="btn modal-close " data-id="">Buscar</a>
    </div>

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
</script>
