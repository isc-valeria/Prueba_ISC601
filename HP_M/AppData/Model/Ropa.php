<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:25 PM
 */

namespace AppData\Model;


class Ropa
{
    private $tabla="Ropa";
    private $id_ropa;
    private $descripcion_ropa;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Ropa VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll(){
        $sql="select * from Ropa";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }


    function update(){
        $sql="update Ropa set descripcion_ropa='variable' where id_ropa='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Ropa WHERE id_color='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}