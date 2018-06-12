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

	function getAll()
	{
		$sql="select *from turnos";
		$datos= $this->conexion ->QueryResultado($sql);
		return $datos;
	}
    function add()
    {
        $sql="insert into turnos VALUES ('datos')";
        $datos= $this->conexion ->querySimple($sql);
        return $datos;
    }
	function update() 
	{
		$sql="update turnos set descripcion_turno='variable' where id_turno='id'";
		$datos= $this->conexion ->querySimple($sql);
		return $datos;
	}
	function delete() 
	{
		$sql="delete from turnos WHERE id_turno='id'";
		$datos= $this->conexion ->querySimple($sql);
		return $datos;
	}
}