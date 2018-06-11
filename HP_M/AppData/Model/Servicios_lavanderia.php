<?php

namespace AppData\Model;


class Servicios_lavanderia
{
    private  $tabla="Servicios_lavanderia";
    private $id_serviciolavanderia;
    private $nombre_servicio;
    private $codigo_servicio;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){
        $sql="insert into Servicios_lavanderia VALUES ('datos')";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function getAll(){
        $sql="select * from Servicios_lavanderia";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }



    function update(){
        $sql="update Servicios_lavanderia set nombre_servicio='variable' where id_serviciolavanderia='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function delete(){
        $sql="delete from Servicios_lavanderia WHERE id_serviciolavanderia='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
}