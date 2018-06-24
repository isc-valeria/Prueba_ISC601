<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 09/05/2018
 * Time: 10:57 PM
 */

namespace AppData\Model;


class Estado_Reservacion
{
    private $tabla="estado_reserva";
    private $id_estador;
    private $estador;

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

    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->estador}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select id_estador, estador from estado_reserva";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from estado_reserva where id_estador='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla}  where id_estador='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set estador='{$this->estador}'where id_estador='{$this->id_estador}'";
        $this->conexion->QuerySimple($sql);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where estador='{$this->estador}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}