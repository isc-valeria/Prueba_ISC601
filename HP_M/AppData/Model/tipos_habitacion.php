<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 17/06/2018
 * Time: 01:52 PM
 */

namespace AppData\Model;


class tipos_habitacion
{
    private $tabla='tipos_habitacion';
    private $id_tipoh;
    private $tipo_ha;
    private $precio;
    private $maximo_personas;

    private $conexion;

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

    function add(){
        $sql="insert into {$this->tabla} VALUES ('0','{$this->tipo_ha}','{$this->precio}','{$this->maximo_personas}')";
        $this->conexion->QuerySimple($sql);
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tipoh='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="Select * from {$this->tabla}";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_tipoh='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update {$this->tabla} set tipo_ha='{$this->tipo_ha}',
               precio='{$this->precio}', maximo_personas='{$this->maximo_personas}'
               where id_tipoh='{$this->id_tipoh}'";
        print ($sql);
        $this->conexion->QuerySimple($sql);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  tipo_ha='{$this->tipo_ha}' ";
        $dato=$this->conexion->QueryResultado($sql);
        return $dato;
    }

}