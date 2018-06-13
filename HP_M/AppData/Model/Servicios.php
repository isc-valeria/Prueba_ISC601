<?php

namespace AppData\Model;

class Servicios
{
    private $tabla="servicios";
	private $id_servicio;
	private $descripcion_ser;
	private $hora_inicio;
	private $hora_fin;

	function __construct()
	{
		$this->conexion= new conexion();
	}

    function get($atributo)
    {
        return $this->$atributo;
    }

	function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
	function add()
	{
		$sql="insert into {$this->tabla} values ('0','{$this->descripcion_ser}', '{$this->hora_inicio}', '{$this->hora_fin}')";
		$this->conexion ->QuerySimple($sql);
	}
	function getAll()
	{
		$sql="select * from {$this->tabla} order by id_servicio asc ";
		$datos= $this->conexion ->QueryResultado($sql);
		return $datos;
	}

	function delete($id)
	{
		$sql="DELETE FROM {$this->tabla} WHERE id_servicio='{$id}'";
		$this->conexion ->QuerySimple($sql);
	}

	function getOne($id)
    {
        $sql="SELECT * FROM {$this->tabla} where id_servicio='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql="update {$this->tabla} SET descripcion_ser='{$this->descripcion_ser}', hora_inicio='{$this->hora_inicio}', hora_fin='{$this->hora_fin}' WHERE id_servicio='{$this->id_servicio}'";
        $this->conexion->QuerySimple($sql);

    }
}