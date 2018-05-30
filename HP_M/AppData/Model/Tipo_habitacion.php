<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 09/05/2018
 * Time: 09:49 PM
 */

namespace AppData\Model;


class Tipo_habitacion
{

    private  $tabla="Tipos_habitacion";
    private $id_tipoh;
    private $tipo_ha;
    private $precio;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Tipos_habitacion VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function getAll(){
        $sql="select*from Tipos_habitacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Tipos_habitacion set tipo_ha='variable' where id_tipoh='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Tipos_habitacion WHERE id_tipoh='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

}