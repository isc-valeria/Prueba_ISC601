<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */

namespace AppData\Model;


class Tipo_equiposegu
{
    private $tabla="tipo_equiposegu";
    private  $id_tipoequisegu;
    private  $descripcion_tipo;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){



    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}