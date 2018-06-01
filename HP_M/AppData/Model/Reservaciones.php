<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 30/05/2018
 * Time: 11:29 AM
 */

namespace AppData\Model;


class Reservaciones
{
    private $tabla= "reservaciones";
    private $id_reservacion;
    private $clave_reserva;
    private $id_cliente;
    private $fecha_reserva;
    private $fecha_llegada;
    private $fecha_salida;
    private $id_estador;
    private $no_personas;


    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add(){

    }
    function getAll(){
        $sql="SELECT reservaciones.id_reservacion, reservaciones.clave_reserva, clientes.nombre_cli, clientes.ap_cli, clientes.am_cli, reservaciones.fecha_reserva, reservaciones.fecha_llegada, reservaciones.fecha_salida, estado_reserva.estador, reservaciones.no_personas FROM reservaciones, clientes, estado_reserva WHERE reservaciones.id_cliente=clientes.id_cliente AND estado_reserva.id_estador= reservaciones.id_estador ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}