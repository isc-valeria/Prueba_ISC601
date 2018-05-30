<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 09/05/2018
 * Time: 10:22 PM
 */

namespace AppData\Model;


class Salidas
{
    private $tabla="Salidas";
    private $id_salida;
    private $fecha_sal;
    private $cantidad_sal;
    private $id_producto;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Salidas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}