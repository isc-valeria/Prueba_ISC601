<?php

namespace AppData\Model;

class Asigna_servicios
{
    private $tabla="asigna_servicios";
	private $id_asignaser;
	private $num_habitacion;
	private $descripcion_ser;
	private $descripcion_est=80;
	private $fecha_reg;
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
        $sql="insert into {$this->tabla} values('0','{$this->num_habitacion}','{$this->descripcion_ser}',80, sysdate())";
        $this->conexion->QuerySimple($sql);
	}
	function getAll()
    {

        $sql="SELECT asigna_servicios.id_asignaser, habitaciones.num_habitacion, servicios.descripcion_ser, asigna_servicios.fecha_reg, estado_servicios.descripcion_est 
                FROM habitaciones, asigna_servicios, servicios, estado_servicios 
                WHERE habitaciones.id_habitacion=asigna_servicios.id_habitacion 
                AND servicios.id_servicio=asigna_servicios.id_servicio 
                AND estado_servicios.id_estados=asigna_servicios.id_estados ORDER BY id_asignaser ASC";

        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql = "delete from {$this->tabla} where id_asignaser='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_asignaser='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


    function update()
	{
        $sql="UPDATE {$this->tabla} SET 
        id_habitacion='{$this->num_habitacion}', 
        id_servicio='{$this->descripcion_ser}',
        id_estados='{$this->descripcion_est}'
        WHERE id_asignaser={$this->id_asignaser}";
        $this->conexion->QuerySimple($sql);
	}

}