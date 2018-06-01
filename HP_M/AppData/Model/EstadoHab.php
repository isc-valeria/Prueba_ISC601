<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class EstadoHab
{
    private  $tabla="Estado_habitacion";
    private $id_estadoh;
    private $estado_ha;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Estado_habitacion VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function get(){
        $sql="select*from Estado_habitacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Estado_habitacion set estado_ha='variable' where id_estadoh='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Estado_habitacion WHERE id_estadoh='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

}