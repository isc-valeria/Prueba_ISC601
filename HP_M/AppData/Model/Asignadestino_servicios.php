<?php
/**
 * Created by PhpStorm.
 * User: adriana gonzalez
 * Date: 09/05/2018
 * Time: 09:35 PM
 */

namespace AppData\Model;


class Asignadestino_servicios
{

    private $tabla="Asignadestino_servicios";
    private $id_destinoser;
    private $id_salida;
    private $id_servicio;

    private $conexion;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Asignadestino_servicios";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }



}