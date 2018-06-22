<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/06/2018
 * Time: 05:36 PM
 */

?>


<div class="row">
    <div class="col s4 offset-s1">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <div align="center"><span class="card-title">Habitaciones</span></div>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">

                    <li class="tab"><a href="#test1">Habitaciones</a></li>
                    <li class="tab"><a href="#test2">Reservaciones</a></li>
                    <li class="tab"><a href="#test3">Tipos</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test1" align="center"><a href="<?php echo URL?>estado_habitaciones">Estado de las Habitaciones</a></div>
                <div id="test2" align="center"><a href="<?php echo URL?>estado_reservacion">Estado de las Reservaciones</a></div>
                <div id="test3" align="center"><a href="<?php echo URL?>tipos_habitacion">Tipos de habitación</a></div>
            </div>
        </div>
    </div>

    <div class="col s4 offset-s1">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <div align="center"><span class="card-title">Almacen</span></div>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a href="#test4">Categorias de Producto</a></li>
                    <li class="tab"><a href="#test5">Tipos de Producto</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test4" align="center"><a href="<?php echo URL?>categorias_producto">Categorias</a></div>
                <div id="test5" align="center"><a href="<?php echo URL?>tipos_producto">Tipos</a></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s4 offset-s1">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <div align="center"><span class="card-title">Habitaciones</span></div>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">

                    <li class="tab"><a href="#test6">Servicios de Lavanderia</a></li>
                    <li class="tab"><a href="#test7">Observaciones</a></li>
                    <li class="tab"><a href="#test8">Ticket</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test6" align="center"><a href="<?php echo URL?>servicioslavanderia">Servicios</a></div>
                <div id="test7" align="center"><a href="<?php echo URL?>observaciones">Observaciones</a></div>
                <div id="test8" align="center"><a href="<?php echo URL?>ticket">Ticket</a></div>
            </div>
        </div>
    </div>
    <div class="col s4 offset-s1">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <div align="center"><span class="card-title">Empleados</span></div>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">

                    <li class="tab"><a href="#test9">Turnos</a></li>
                    <li class="tab"><a href="#test10">Puestos</a></li>
                </ul>
            </div>
            <div class="card-content grey lighten-4">
                <div id="test9" align="center"><a href="<?php echo URL?>turnos">Turnos</a></div>
                <div id="test10" align="center"><a href="<?php echo URL?>puestos">Puestos</a></div>
            </div>
        </div>
    </div>
</div>