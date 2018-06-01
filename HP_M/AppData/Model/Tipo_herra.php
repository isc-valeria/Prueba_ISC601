<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:05 PM
 */

namespace AppData\Model;


class Tipo_herra
{
    private $id_tipoherra	;
    private $descripcion_h;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from Tipo_herra";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}