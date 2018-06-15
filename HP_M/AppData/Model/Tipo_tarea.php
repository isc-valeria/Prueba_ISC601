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

    private $tabla="tipo_tarea";
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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_tarea}')";
        $this->conexion->QuerySimple($sql);
    }
    function getAll()
    {
        $sql="select id_tipotarea,descripcion_tarea from tipo_tarea";
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
        $sql="select * from  {$this->tabla}  where id_tipotarea='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set descripcion_tarea='{$this->descripcion_tarea}'where id_tipotarea='{$this->id_tipotarea}'";
        $this->conexion->QuerySimple($sql);
    }
}