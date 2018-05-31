<?php
/**
 * Created by PhpStorm.
 * User: PROFESOR
 * Date: 22/05/2018
 * Time: 01:40 PM
 */
?>
<!--***************modal tipo habitacion*****************-->
<div id="modal_tipo_habitacion" class="modal center-align ">
    <div class="modal-content">
        <div class="card-panel teal #00b8d4"><h4 class="left"><a class=" text-black"></a></h4><h4 align="center">Tipo Habitación</h4></div>

        <div class="row">
            <form class="col s12 ">
                <div class="row">
                    <div class="input-field col s10">
                        <i class="mdi-action-verified-user prefix icon-pencil"></i>
                        <input id="nonmbretipohabitacion" type="text" class="validate center">
                        <label for="nonmbretipohabitacion"  data-error="incorrecto" data-success="Correcto">Tipo de Habitación</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field input-field col s10 text">
                        <i class="mdi-action-verified-user prefix icon-coin-dollar"></i>
                        <input id="precio" type="number" class="validate center" >
                        <label for="precio"  data-error="Incorrecto" data-success="Correcto" >Precio</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <button class="btn waves-effect waves-light right #00838f cyan darken-3" type="submit" name="action">Registar

                        </button>
                    </div>
                    <div class="input-field col s3">
                        <button class="btn waves-effect waves-light righ #00838f cyan darken-3" type="submit" name="action">Limpiar

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--*******************fin modal tipo habitacion*************-->
