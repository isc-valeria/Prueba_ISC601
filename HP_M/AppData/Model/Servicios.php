<?php

namespace AppData\Model;

class Servicios
{
	private $id_servicio;
	private $descripcion_ser;
	private $hora_inicio;
	private $hora_fin;

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
		$sql="insert into servicios values (100, 'SPA', sysdate, sysdate)";
		$datos= $this->conexion ->querySimple($sql);
	}
	function getAll()
	{
		$sql="select * from servicios order by id_servicio asc ";
		$datos= $this->conexion ->QueryResultado($sql);
		return $datos;
	}
	function update() 
	{
		$sql="update servicios set descripcion_ser = 'GYM' where servicios.id_servicio=100";
		$datos= $this->conexion ->querySimple($sql);
	}
	function delete() 
	{
		$sql="delete servicios where servicios.id_servicio=100";
		$datos= $this->conexion ->querySimple($sql);
	}
}