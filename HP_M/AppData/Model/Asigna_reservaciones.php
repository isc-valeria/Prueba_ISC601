<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 09/05/2018
 * Time: 10:58 PM
 */

namespace AppData\Model;


class Asigna_reservaciones
{
    private $id_asignares;
    private $id_habitacion;
    private $id_reservacion;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Asigna_reservaciones";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}