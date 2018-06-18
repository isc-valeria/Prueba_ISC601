<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:25
 */

namespace AppData\Model;


class Clasificacion_pieza
{
    private $tabla="Clasificacionkilo_pieza";
    private  $id_clasificacionpieza;
    private  $descripcion_pieza;
    private  $cantidad;
    private  $id_serviciolav;
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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_pieza}','{$this->cantidad}','{$this->id_serviciolav}','{$this->id_observacion}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select Clasificacion_pieza.id_clasificacionpieza, Clasificacion_pieza.descripcion_pieza, Clasificacion_pieza.cantidad, Servicios_lavanderia.id_serviciolav, Observaciones.id_observacion
              FROM Clasificacion_pieza, Servicios_lavanderia, Observaciones 
              WHERE Clasificacion_pieza.id_serviciolav = Servicios_lavanderia.id_serviciolav
              AND clasificacion_pieza.id_observacion = Observaciones.id_observacion
              ORDER BY id_clasificacionpieza ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from Clasificacion_pieza where id_clasificacionpieza='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  Clasificacion_pieza where id_clasificacionpieza='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set descripcion_pieza='{$this->descripcion_pieza}', cantidad='{$this->cantidad}',
               id_serviciolav='{$this->id_serviciolav}', id_observacion='{$this->id_observacion}' 
               where id_clasificacionpieza='{$this->id_clasificacionpieza}'";
        $this->conexion->QuerySimple($sql);
    }
}