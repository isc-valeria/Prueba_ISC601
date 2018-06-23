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
    function getAll(){
//        $sql="SELECT habitaciones.num_habitacion, habitaciones.descripcion_hab,tipos_habitacion.tipo_ha, clientes.email, reservaciones.fecha_reserva FROM habitaciones, tipos_habitacion, asigna_reservaciones, reservaciones, clientes WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND reservaciones.id_reservacion=asigna_reservaciones.id_reservacion AND clientes.id_cliente=reservaciones.id_cliente ";
        $sql="SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email, habitaciones.num_habitacion, habitaciones.descripcion_hab, estado_habitacion.estado_ha, tipos_habitacion.tipo_ha, tipos_habitacion.precio, reservaciones.fecha_reserva, reservaciones.fecha_llegada, reservaciones.fecha_salida, reservaciones.no_personas, estado_reserva.estador FROM habitaciones, tipos_habitacion, estado_habitacion, asigna_reservaciones, reservaciones, clientes, estado_reserva WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND habitaciones.id_estadoh=estado_habitacion.id_estadoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND asigna_reservaciones.id_reservacion=reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function getDatos()
    {
        $sql="SELECT * FROM tipos_habitacion";
        $result3=$this->conexion->QueryResultado($sql);
        return $result3;
    }
    function getOne($id)
    {
        $sql = "select * from  habitaciones where id_habitacion='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


    function tabs($id){
        $sql="SELECT reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, clientes.telefono, clientes.email, habitaciones.num_habitacion, habitaciones.descripcion_hab, estado_habitacion.estado_ha, tipos_habitacion.tipo_ha, tipos_habitacion.precio, reservaciones.fecha_reserva, reservaciones.fecha_llegada, reservaciones.fecha_salida, reservaciones.no_personas, estado_reserva.estador FROM habitaciones, tipos_habitacion, estado_habitacion, asigna_reservaciones, reservaciones, clientes, estado_reserva WHERE habitaciones.id_tipoh=tipos_habitacion.id_tipoh AND habitaciones.id_estadoh=estado_habitacion.id_estadoh AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion AND asigna_reservaciones.id_reservacion=reservaciones.id_reservacion AND reservaciones.id_cliente=clientes.id_cliente AND reservaciones.id_estador=estado_reserva.id_estador AND reservaciones.clave_reserva={$id}";
        $datos=$this->conexion->QueryResultado($sql);

        return $datos;
    }

}