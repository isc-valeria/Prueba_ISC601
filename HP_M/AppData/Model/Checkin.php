<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Checkin
{
    private $tabla="checkin";
    private $id_checkin;
    private $id_asignares;
    private $fecha_checkin;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql="insert into {$this->tabla} (id_chekin,id_asignares,fecha_checkin) values('0','{$this->id_chekin}','{$this->id_asignares}','{$this->fecha_checkin}')";
    }
    function getAll()
    {
        $sql="SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email FROM reservaciones, clientes, estado_reserva WHERE reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND estado_reserva.estador='confirmado' ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getOne($id)
    {
        $sql = "SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email, reservaciones.fecha_reserva, reservaciones.fecha_llegada, reservaciones.fecha_salida, reservaciones.no_personas, tipos_habitacion.tipo_ha, tipos_habitacion.precio, estado_habitacion.estado_ha, estado_reserva.estador, checkin.fecha_checkin FROM habitaciones, tipos_habitacion, estado_habitacion, asigna_reservaciones, reservaciones, clientes, estado_reserva, checkin WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND habitaciones.id_estadoh=estado_habitacion.id_estadoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND asigna_reservaciones.id_reservacion=reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND estado_reserva.estador='Checkin' AND reservaciones.clave_reserva={$id}";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getTwo($id)
    {
        $sql = "SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email, reservaciones.fecha_reserva, reservaciones.fecha_llegada, reservaciones.fecha_salida, reservaciones.no_personas, tipos_habitacion.tipo_ha, tipos_habitacion.precio, estado_habitacion.estado_ha, estado_reserva.estador, checkin.fecha_checkin FROM habitaciones, tipos_habitacion, estado_habitacion, asigna_reservaciones, reservaciones, clientes, estado_reserva, checkin WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND habitaciones.id_estadoh=estado_habitacion.id_estadoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND asigna_reservaciones.id_reservacion=reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND estado_reserva.estador='Confirmado' AND reservaciones.clave_reserva={$id}";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function check()
    {
        $sql="SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email, checkin.fecha_checkin FROM estado_reserva,checkin, asigna_reservaciones, clientes, reservaciones WHERE checkin.id_asignares=asigna_reservaciones.id_asignares AND asigna_reservaciones.id_reservacion=reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND estado_reserva.estador='Checkin' ORDER BY checkin.fecha_checkin ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}