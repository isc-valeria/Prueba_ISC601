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

    private $id_reservacion;
    private $clave_reserva;
    private $id_cliente;
    private $fecha_reserva;
    private $fecha_llegada;
    private $fecha_salida;
    private $id_estador;


    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from reservaciones";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}