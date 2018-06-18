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
        $sql="insert into {$this->tabla} values('0','{$this->num_habitacion}','{$this->descripcion_ser}','{$this->descripcion_est}',sysdate())";
        $this->conexion->QuerySimple($sql);
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
        $sql = "update {$this->tabla} set num_habitacion='{$this->num_habitacion}',
               descripcion_ser='{$this->descripcion_ser}', descripcion_est='{$this->descripcion_est}',
               fecha_reg='{$this->fecha_reg}' where id_asignaser='{$this->id_asignaser}'";
        $this->conexion->QuerySimple($sql);
	}

}