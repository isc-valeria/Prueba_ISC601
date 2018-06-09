<?php

namespace AppData\Model;


class Estado_orden
{
    private $tabla="estadoorden";
    private $id_estadoorden;
    private $estado_orden;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Estado_orden VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll(){
        $sql="select * from Estado_orden";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Estado_orden set estado_orden='variable' where id_estadoorden='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Estado_orden WHERE id_estadoorden='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}