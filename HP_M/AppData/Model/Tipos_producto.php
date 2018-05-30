<?php
/**
 * Created by PhpStorm.
 * User: adriana gonzalez
 * Date: 09/05/2018
 * Time: 09:52 PM
 */

namespace AppData\Model;


class Tipos_producto
{
    private $tabla="Tipos_producto";
    private $id_tipopro;
    private $descripcion_pro;

    private $conexion;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Tipos_producto";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}