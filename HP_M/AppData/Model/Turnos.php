<?php

namespace AppData\Model;

class Turnos
{
	private $id_turno;
	private $descripcion_turno;
	private $hr_entrada;
	private $hr_salida;

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