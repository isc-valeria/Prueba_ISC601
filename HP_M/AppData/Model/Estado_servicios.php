<?php

namespace AppData\Model;

class Estado_servicios
{
	private $id_estados;
	private $descripcion_est;

	function __construct()
	{
		$this->conexion= new conexion();
	}
	function add()
	{
		$sql="insert into Estado_servicios values (200, 'Local')";
		$datos= $this->conexion ->querySimple($sql);
	}
	function get() 
	{
		$sql="select * from Estado_servicios";
		$datos= $this->conexion ->queryResultados($sql);
		return $datos;
	}
	function update() 
	{
		$sql="update Estado_servicios set descripción_est = 'Externo' where Estado_servicios.id_estados=200";
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql="delete Estado_servicios where Estado_servicios.id_estados=200";
		$datos= $this->conexion ->querySimple($sql);
	}
}