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
    private $tabla="Clasificacion_pieza";
    private  $id_clasificacionpieza;
    private $descripcion_pieza;
    private  $cantidad;
    private  $id_serviciolav;
    private  $id_observacion;
    private  $fecha_registro;

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
        $sql="insert into Clasificacion_pieza values('0','{$this->descripcion_pieza}','{$this->cantidad}','{$this->id_serviciolav}','{$this->id_observacion}', '{$this->fecha_registro }')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Clasificacion_pieza.id_clasificacionpieza, Clasificacion_pieza.descripcion_pieza, Servicios_lavanderia.descripcion_servicio, Clasificacion_pieza.cantidad, Observaciones.descripcion_observacion, Clasificacion_pieza.fecha_registro
              FROM Clasificacion_pieza, Servicios_lavanderia, Observaciones 
              WHERE Clasificacion_pieza.id_serviciolav = Servicios_lavanderia.id_serviciolav 
              and Clasificacion_pieza.id_observacion = Observaciones.id_observacion
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
        $sql="select * from Clasificacion_pieza where id_clasificacionpieza='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql="update Clasificacion_pieza set descripcion_pieza='{$this->descripcion_pieza}', cantidad='{$this->cantidad}',
              id_serviciolav='{$this->id_serviciolav}', id_observacion='{$this->id_observacion}', fecha_registro='{$this->fecha_registro}' WHERE id_clasificacionpieza='{$this->id_clasificacionpieza}'";
        $this->conexion->QuerySimple($sql);
    }
}