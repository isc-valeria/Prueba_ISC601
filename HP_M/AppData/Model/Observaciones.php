<?php
/**
 * Created by PhpStorm.
 * User: Mary
 * Date: 12/06/2018
 * Time: 16:23
 */

namespace AppData\Model;


class Observaciones
{
    private $tabla="Observaciones";
    private $id_observacion;
    private $descripcion_observacion;
    private $cargo;

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
        $sql="insert into {$this->tabla} values ('0','{$this->descripcion_observacion}', '{$this->cargo}')";
        $this->conexion ->QuerySimple($sql);
    }
    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_observacion ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM {$this->tabla} WHERE id_observacion='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM {$this->tabla} where id_observacion='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql="UPDATE {$this->tabla} SET descripcion_observacion='{$this->descripcion_observacion}', cargo='{$this->cargo}'";
        $this->conexion->QuerySimple($sql);

    }

}