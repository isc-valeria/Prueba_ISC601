<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class asigna_equiposegu
{
    private  $id_asignaequiposegu;
    private  $id_equiposegu;
    private  $id_tarea;
    private $tabla="Asigna_equiposegu";
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
        // $sql="insert into {$this->tabla}  values('0','{$this->id_equiposegu}','{$this->id_tarea}')";
        $sql="call inserta_equipotarea('{$this->id_tarea}','{$this->id_equiposegu}')";

        $this->conexion->QuerySimple($sql);
    }
    function getAll()
    {
        $sql="select id_asignaequiposegu,id_equiposegu,id_tarea from Asigna_equiposegu ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from asigna_equiposegu where id_tarea='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  Asigna_equiposegu where id_tarea='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="call inserta_equipotarea('{$this->id_tarea}','{$this->id_equiposegu}')";
        $this->conexion->QuerySimple($sql);
    }
}