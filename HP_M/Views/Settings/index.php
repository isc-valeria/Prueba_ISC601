<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 19/06/2018
 * Time: 05:36 PM
 */

?>


<div class="row">
    <div class="col s10 offset-l1">
        <ul class="collapsible popout" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">airline_seat_individual_suite</i>Habitaciones</div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>estado_habitaciones">Estado de las Habitaciones</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>estado_reservacion">Estado de las Reservaciones</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>tipos_habitacion">Tipos de habitación</a></span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">business_center</i>Servicios</div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>categorias_producto">Categorias</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>tipos_producto">Tipos</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>servicioslavanderia">Servicios de Lavanderia</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>observaciones">Observaciones de Lavanderia</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>ticket">Ticket de Lavanderia</a></span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">dns</i>Almacen</div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>categorias_producto">Categorias</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>tipos_producto">Tipos</a></span></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">directions_run</i>Empleados</div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>turnos">Turnos</a></span></div>
                <div class="collapsible-body" align="center"><span><a href="<?php echo URL?>puestos">Puestos</a></span></div>

            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.collapsible').collapsible();
    });
</script>