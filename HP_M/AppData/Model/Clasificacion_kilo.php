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
    private $tabla="Clasificacion_kilo";
    private  $id_clasificacionkilo;
    private  $id_serviciolav;
    private  $cantidadkg;
    private  $id_observacion;

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
        $sql="SELECT Clasificacion_kilo.id_clasificacionkilo, Servicios_lavanderia.id_serviciolav, Clasificacion_kilo.cantidadkg, Observaciones.id_observacion
              FROM Clasificacion_kilo, Servicios_lavanderia, Observaciones 
              WHERE Clasificacion_kilo.id_serviciolav = Servicios_lavanderia.id_serviciolav 
              and Clasificacion_kilo.id_observacion = Observaciones.id_observacion
              ORDER BY id_clasificacionkilo ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from Clasificacion_kilo where id_clasificacionkilo='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from Clasificacion_kilo where id_clasificacionkilo='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set id_serviciolav='{$this->id_serviciolav}', cantidadkg='{$this->cantidadkg}',
               id_observacion='{$this->id_observacion}' where id_clasificacionkilo='{$this->id_clasificacionkilo}'";
        $this->conexion->QuerySimple($sql);
    }
}