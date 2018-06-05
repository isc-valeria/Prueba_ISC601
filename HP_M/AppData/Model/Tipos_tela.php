<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:25 PM
 */

namespace AppData\Model;


class Tipos_tela
{
    private $tabla="Tipos_tela";
    private $id_tela;
    private $descripcion_tela;

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
        $sql="select * from Tipos_tela";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Tipos_tela set descripcion_tela='variable' where id_tela='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Tipos_tela WHERE id_tela='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}