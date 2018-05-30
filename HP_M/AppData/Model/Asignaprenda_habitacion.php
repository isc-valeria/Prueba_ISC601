<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:27 PM
 */

namespace AppData\Model;


class Asignaprenda_habitacion
{
    private $id_asignaprenda;
    private $id_habitacion;
    private $id_registropren;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Asignaprenda_habitacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}