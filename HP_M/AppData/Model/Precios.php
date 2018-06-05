<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:25 PM
 */

namespace AppData\Model;


class Precios
{
    private $tabla="Precios";
    private $id_precio;
    private $descripcion_precio;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Precios VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll(){
        $sql="select * from Precios";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Precios set descripcion_precio='variable' where id_precio='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Precios WHERE id_precio='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}