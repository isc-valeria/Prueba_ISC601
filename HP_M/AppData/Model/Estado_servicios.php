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
    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }
	function add()
	{
		$sql="insert into Estado_servicios values (200, 'Local')";
		$datos= $this->conexion ->querySimple($sql);
	}
	function getAll()
	{
		$sql="select * from Estado_servicios";
		$datos= $this->conexion ->QueryResultado($sql);
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