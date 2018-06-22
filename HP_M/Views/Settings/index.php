<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/06/2018
 * Time: 05:36 PM
 */

?>


<div class="row">
    <div class="col s4 offset-s2">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Habitaciones</span>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a href="#test4">Habitaciones</a></li>
                    <li class="tab"><a href="#test5">Reservaciones</a></li>
                    <li class="tab"><a href="#test6">Tipos</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test4" align="center"><a href="<?php echo URL?>estado_habitaciones">Estado de las Habitaciones</a></div>
                <div id="test5" align="center"><a href="<?php echo URL?>estado_reservacion">Estado de las Reservaciones</a></div>
                <div id="test6" align="center"><a href="<?php echo URL?>tipos_habitacion">Tipos de habitación</a></div>
            </div>
        </div>
    </div>
</div>

