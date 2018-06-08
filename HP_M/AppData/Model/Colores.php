<?php

namespace AppData\Model;


class Colores
{
    private  $tabla="Colores";
    private $id_color;
    private $descripcion_color;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Colores VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function getAll(){
        $sql="select * from Colores";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }



    function update(){
        $sql="update Colores set descripcion_color='variable' where id_color='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function delete(){
        $sql="delete from Colores WHERE id_color='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}