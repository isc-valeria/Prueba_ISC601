<?php

namespace AppData\Model;

class Asigna_servicios
{
	private $id_asignaser;
	private $id_habitacion;
	private $id_servicio;
	private $id_estados;
	private $fecha_reg;

	function __construct()
	{
		$this->conexion= new conexion();
	}
	function add()
	{
		$sql="insert into Asigna_servicios values (300, 1, 100, 200, sysdate)";
		$datos= $this->conexion ->QuerySimple($sql);
	}
	function get() 
	{
		$sql="select * from Asigna_servicios";
		$datos= $this->conexion ->QueryResultado()($sql);
		return $datos;
	}
	function getAll()
    {
<<<<<<< HEAD
        $sql="SELECT habitaciones.num_habitacion, servicios.descripcion_ser, asigna_servicios.fecha_reg, estado_servicios.descripcion_est 
                FROM habitaciones, asigna_servicios, servicios, estado_servicios 
                WHERE habitaciones.id_habitacion=asigna_servicios.id_habitacion 
                AND servicios.id_servicio=asigna_servicios.id_servicio 
                AND estado_servicios.id_estados=asigna_servicios.id_estados ";
=======
        $sql="SELECT habitaciones.num_habitacion, servicios.descripcion_ser, asigna_servicios.fecha_reg, estado_servicios.descripcion_est FROM habitaciones, asigna_servicios, servicios, estado_servicios WHERE habitaciones.id_habitacion=asigna_servicios.id_habitacion AND servicios.id_servicio=asigna_servicios.id_servicio AND estado_servicios.id_estados=asigna_servicios.id_estados ";
>>>>>>> 6daa1591c0b2038bb3702585f30fc30a3f03efad
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getDatos1()
    {
        $sql="SELECT * FROM habitaciones ";
        $returnhab=$this->conexion->QueryResultado($sql);
        return $returnhab;
    }
    function getDatos2()
    {
        $sql="SELECT * FROM servicios";
        $returnser=$this->conexion->QueryResultado($sql);
        return $returnser;
    }
    function getDatos3()
    {
        $sql="SELECT * FROM estado_servicios";
        $returnest=$this->conexion->QueryResultado($sql);
        return $returnest;
    }

    function update()
	{
		$sql="update Asigna_servicios set id_habitacion = 3 where Asigna_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql="delete Asigna_servicios where Asigna_servicios.id_asignaser=300";
		$datos= $this->conexion ->querySimple($sql);
	}
}