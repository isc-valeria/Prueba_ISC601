<?php
/**
 * Created by PhpStorm.
 * User: adriana gonzalez
 * Date: 09/05/2018
 * Time: 09:41 PM
 */

namespace AppData\Model;


class Asignadestino_habitacion
{

    private $tabla="Asignadestino_habitacion";
    private $id_destinohab;
    private $id_habitacion;
    private $id_salida;

    private $conexion;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Asignadestino_habitacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}