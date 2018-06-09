<?php

namespace AppData\Model;


class Ticket
{
    private $tabla="registro_prendas";
    private $id_ticket;
    private $id_habitacion;
    private $fecha_entrada;
    private $fecha_salida;
    private $id_orden;
    private $total;

    function __construct()
    {
        $this->conexion=new conexion();
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
        $sql="insert into {$this->tabla} values('0','{$this->id_habitacion}','{$this->fecha_entrada},'{$this->fecha_salida},'{$this->id_orden}',,'{$this->total}'";

        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT registro_prendas.id_ticket, Habitaciones.num_habitacion, registro_prendas.fecha_entrada, registro_prendas.id_fecha_salida, Ordenes.id_orden, registro_prendas.total   
        FROM registro_prendas, Habitaciones, Ordenes 
        
        WHERE registro_prendas.id_habitacion=Habitaciones.id_habitacion 
        AND registro_prendas.id_orden = Ordenes.id_orden
        
        ORDER BY id_ticket ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_ticket='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_ticket='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update registro_prendas set id_habitacion='{$this->id_habitacion}',
               fecha_entrada='{$this->fecha_entrada}',
               fecha_salida='{$this->fecha_salida}',
               id_orden='{$this->id_orden}',
               total='{$this->total}'
               where id_ticket='{$this->id_ticket}'";
        $this->conexion->QuerySimple($sql);
    }
}