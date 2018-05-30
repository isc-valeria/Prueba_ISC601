<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Checkout
{
    private $tabla="check_out";
    private $id_chekout;
    private $id_asignares;
    private $fecha_checkout;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

    }
    function getAll(){
        $sql="SELECT habitaciones.num_habitacion, habitaciones.descripcion_hab,tipos_habitacion.tipo_ha, clientes.clave_cli, check_out.fecha_checkout FROM habitaciones, tipos_habitacion, asigna_reservaciones, reservaciones, clientes, check_out WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND reservaciones.id_reservacion=asigna_reservaciones.id_reservacion AND clientes.id_cliente=reservaciones.id_cliente AND asigna_reservaciones.id_asignares=check_out.id_asignares ";
//        $sql="SELECT check_out.id_checkout ,clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.clave_cli, habitaciones.num_habitacion, tipos_habitacion.tipo_ha, reservaciones.clave_reserva, reservaciones.fecha_reserva, check_in.fecha_checkin, check_out.fecha_checkout, estado_reserva.estador FROM check_in, asigna_reservaciones, habitaciones, tipos_habitacion, reservaciones, clientes, estado_reserva, check_out WHERE check_in.id_asignares=asigna_reservaciones.id_asignares AND habitaciones.id_habitacion=asigna_reservaciones.id_habitacion AND habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND reservaciones.id_reservacion=asigna_reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND check_out.id_asignares=asigna_reservaciones.id_asignares  ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function getDatos()
    {
        $sql="SELECT * FROM tipos_habitacion";
        $result3=$this->conexion->QueryResultado($sql);
        return $result3;
    }
    function update(){

    }
    function delete(){

    }

}