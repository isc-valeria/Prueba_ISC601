<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:26
 */

namespace AppData\Model;


class Clasificacion_kilo
{
    private  $id_clasificacionkilo;
    private  $id_serviciolav;
    private  $cantidadkg;
    private  $id_observacion;



    private $tabla="Clasificacion_kilo";


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
        $sql="insert into {$this->tabla} values('0','{$this->id_serviciolav}','{$this->cantidadkg}','{$this->id_observacion}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select id_clasificacionkilo,servicios_lavanderia.id_serviciolav, clasificacion_kilo.id_clasificacionkilo,ticket.id_ticket,subtotal
              from ventahab_kilo, habitaciones,clasificacion_kilo,ticket 
              WHERE clasificacion_kilo.id_serviciolav=servicios_lavanderia.id_serviciolav 
              and clasificacion_kilo.id_observacion=observaciones.id_observacion";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from clasificacion_kilo where id_clasificacionkilo='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from clasificacion_kilo where id_clasificacionkilo='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set id_serviciolav='{$this->id_serviciolav}', cantidadkg='{$this->cantidadkg}',
               id_observacion='{$this->id_observacion}'";
        $this->conexion->QuerySimple($sql);
    }
}