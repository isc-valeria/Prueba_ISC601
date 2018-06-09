<?php


namespace AppData\Model;


class Tipos_prendas
{
    private  $tabla="Tipos_prendas";
    private $id_tipoprenda;
    private $descripcion_prenda;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Tipos_prendas VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function getAll(){
        $sql="select * from Tipos_prendas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update Tipos_prendas set descripcion_prenda='variable' where id_tipoprenda='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function delete(){
        $sql="delete from Tipos_prendas WHERE id_tipoprenda='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}