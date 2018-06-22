<div class="card-panel">
    <h4 align="center">Check-In's Pendientes<span class="right"><a href="#modal_registro"class="btn green white-text modal-trigger" id="add_checkin">
                <i class="material-icons">add</i>
            </a></span></h4>
    <div class="divider"></div>

    <div class="row">
        <div class="input-field col s5 offset-s6">
            <i class="mdi-action-verified-user prefix icon-search "></i>
            <input id="buscar1" placeholder= "Buscar folio de reservación" type="text">
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
            <?php
            require_once ("tabla.php");
            ?>
            </ul>
        </div>
    </div>
</div>