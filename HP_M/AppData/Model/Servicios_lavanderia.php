<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:22
 */

namespace AppData\Model;


class Servicios_lavanderia
{
    private $tabla="Servicios_lavanderia";
    private $id_serviciolav;
    private $descripcion_servicio;
    private $precio;

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
        $sql="insert into Servicios_lavanderia values ('0','{$this->descripcion_servicio}', '{$this->precio}')";
        $this->conexion ->QuerySimple($sql);
    }
    function getAll()
    {
        $sql="select * from {$this->tabla} order by  id_serviciolav ASC";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function combo()
    {
        $sql="select {$this->descripcion_servicio} from {$this->tabla} order by  id_serviciolav ASC";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM Servicios_lavanderia WHERE id_serviciolav='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM Servicios_lavanderia where id_serviciolav='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql="UPDATE Servicios_lavanderia SET descripcion_servicio='{$this->descripcion_servicio}', precio='{$this->precio}' where  id_serviciolav='{$this->id_serviciolav}'";
        $this->conexion->QuerySimple($sql);
    }

    function graficas()
    {
        //aqui va la consulta de sql
    }


}