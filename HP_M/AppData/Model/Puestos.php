<?php

namespace AppData\Model;

class Puestos
{

    private  $tabla="Puestos";
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
        $sql="select *from Puestos";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Puestos set nombre_emp='variable' where id_empleado='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function delete(){
        $sql="delete from Puestos WHERE id_empleado='id'";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

}