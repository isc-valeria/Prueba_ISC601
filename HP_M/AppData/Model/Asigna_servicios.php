<?php

namespace AppData\Model;

class Asigna_servicios
{
	private $id_asignaser;
	private $id_servicio;
	private $id_estados;
	private $id_habitacion;
	private $fecha_reg;

	function __construct()
	{
		$this->conexion= new conexion();
	}
	function add()
	{
		$sql="insert into Asigna_servicios values (0, '{$this->id_servicio}', 100, 200, sysdate)";
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

        $sql="SELECT asigna_servicios.id_asignaser, habitaciones.num_habitacion, servicios.descripcion_ser, asigna_servicios.fecha_reg, estado_servicios.descripcion_est 
                FROM habitaciones, asigna_servicios, servicios, estado_servicios 
                WHERE habitaciones.id_habitacion=asigna_servicios.id_habitacion 
                AND servicios.id_servicio=asigna_servicios.id_servicio 
                AND estado_servicios.id_estados=asigna_servicios.id_estados";

        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
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