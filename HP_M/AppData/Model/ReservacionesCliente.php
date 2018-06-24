<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/06/2018
 * Time: 12:14 PM
 */

namespace AppData\Model;


class ReservacionesCliente
{
    private $tabla = "tipos_habitaciones";
    private $id_habitacion;
    private $num_habitacion;
    private $descripcion_hab;
    private $id_tipoh;
    private $id_estadoh=60;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql = "insert into {$this->tabla} values('0','{$this->num_habitacion}',
         '{$this->descripcion_hab}','{$this->id_tipoh}','{$this->id_estadoh}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "select h.num_habitacion,h.descripcion_hab,th.maximo_personas,th.precio
        from habitaciones h
        inner join tipos_habitacion th on h.id_tipoh=th.id_tipoh";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}