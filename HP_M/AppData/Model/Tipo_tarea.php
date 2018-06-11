<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */

namespace AppData\Model;


class Tipo_tarea
{
    private  $id_tipotarea;
    private  $descripcion_tarea;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        //$sql="insert into {$this->tabla} values('0','{$this->num_habitacion}','{$this->descripcion_hab}','{$this->id_tipoh}','{$this->id_estadoh}')";
        $sql="";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select * from tipo_tarea";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from tipo_tarea where id_tipotarea='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  tipo_tarea where id_tarea='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="";
        $this->conexion->QuerySimple($sql);
    }
}