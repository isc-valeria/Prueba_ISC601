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
    private $tabla="observaciones";
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
        $sql="insert into Observaciones  values ('0','{$this->descripcion_observacion}', '{$this->cargo}')";
        $this->conexion ->QuerySimple($sql);
    }
    function getAll()
    {
        $sql="select * from Observaciones order by id_observacion ASC  ";
        $datos= $this->conexion ->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="DELETE FROM Observaciones WHERE id_observacion='{$id}'";
        $this->conexion ->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="SELECT * FROM Observaciones where id_observacion='{$id}}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }


    function update()
    {
        $sql = "update observaciones set descripcion_observacion='{$this->descripcion_observacion}',
              cargo='{$this->cargo}'
                where id_observacion='{$this->id_observacion}'";
        $this->conexion->QuerySimple($sql);
    }




}