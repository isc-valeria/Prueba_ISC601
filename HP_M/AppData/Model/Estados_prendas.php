<?php


namespace AppData\Model;


class estados_prendas
{
    private $tabla="estados_prendas";
    private $id_estadop;
    private $descripcion;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into estados_prendas VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll(){
        $sql="select * from estados_prendas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update estados_prendas set descripcion='variable' where id_estadop='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from estados_prendas WHERE id_estadop='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}