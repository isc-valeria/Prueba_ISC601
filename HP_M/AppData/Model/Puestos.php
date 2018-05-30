<?php

namespace AppData\Model;

class Puestos
{
	private $id_puesto;
	private $descripcion_puesto;

	function __construct()
	{
		$this->conexion= new conexion();
	}

	function get($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    
    function set($atributo)
    {
        return $this->$atributo;
    }
	function add()
	{
		$sql=
		$datos= $this->conexion ->querySimple($sql);
	}
	function getAll()
	{
		$sql=
		$datos= $this->conexion ->QueryResultado($sql);
		return $datos;
	}
	function update() 
	{
		$sql=
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql=
		$datos= $this->conexion ->querySimple($sql);
	}
}