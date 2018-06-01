<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 09/05/2018
 * Time: 09:51 PM
 */

namespace AppData\Model;


class H_Salida
{
    private  $tabla="H_Salida";
    private $id_H_Salida;
    private $Hora;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from H_Salida";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}