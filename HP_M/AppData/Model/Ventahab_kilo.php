<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:24
 */

namespace AppData\Model;


class Ventahab_kilo
{
    private  $id_clasificacionkilo;
    private  $id_serviciolav;
    private  $cantidadkg;
    private  $id_observacion;


    private $tabla="Ventahab_kilo";


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
        $sql="select ventahab_kilo.id_clasificacionkilo,servicios_lavanderia.id_serviciolav,ventahab_kilo.cantidadkg,observaciones.id_observacion
              from ventahab_kilo,habitaciones,clasificacion_kilo,ticket
              WHERE clasificacion_pieza.id_serviciolav=servicios_lavanderia.id_serviciolav
              and clasificacion_pieza.id_observacion=observaciones.id_observacion";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from clasificacion_pieza where id_clasificacionpieza='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  clasificacion_pieza where id_clasificacionpieza='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set descripcion_pieza='{$this->descripcion_pieza}', cantidad='{$this->cantidad}',
               id_serviciolav='{$this->id_serviciolav}', id_observacion='{$this->id_observacion}'";
        $this->conexion->QuerySimple($sql);
    }
}