<?php

namespace AppData\Model;

class Puestos
{

    private  $tabla="Puestos";
    private $id_tipoh;
    private $tipo_ha;
    private $precio;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function getAll(){
        $sql="select *from Puestos";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}