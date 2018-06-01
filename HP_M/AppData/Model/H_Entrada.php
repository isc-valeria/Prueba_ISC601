<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 09/05/2018
 * Time: 09:49 PM
 */

namespace AppData\Model;


class H_Entrada
{
    private  $tabla="H_Entrada";
    private $id_H_Entrada;
    private $Hora;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function get(){
        $sql="select*from H_Entrada";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}