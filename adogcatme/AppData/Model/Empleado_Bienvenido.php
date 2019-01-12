<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:13 PM
 */

namespace AppData\Model;


class Empleado_Bienvenido
{
    private $tabla="usuarios";
    private  $nombre;
    private  $pass;
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
        $sql="insert into {$this->tabla} values('0','{$this->nombre}','{$this->pass}')";
        $this->conexion->querysimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_usuario='{$id}'";
        $this->conexion->querysimple($sql);
    }

    function getAll()
    {
        $sql = "select * from usuarios";
        $datos = $this->conexion->queryResultados($sql);
        return $datos;
    }

    function getOne($id)
    {
    }
    function update()
    {
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  nombre='{$this->nombre}' ";
        $dato=$this->conexion->queryResultados($sql);
        return $dato;
    }

}