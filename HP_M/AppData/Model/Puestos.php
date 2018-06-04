<?php

namespace AppData\Model;

class Puestos
{

    private  $tabla="puestos";
    private $id_puesto;
    private $descripcion_puesto;
    private $precio;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function getAll(){
        $sql="select *from puestos";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function add(){
        $sql="insert into puestos VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update puestos set descripcion_puesto='variable' where id_puesto='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from puestos WHERE id_puesto='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

}