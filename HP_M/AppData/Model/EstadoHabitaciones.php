<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class EstadoHabitaciones
{

    private $id_estadoh;
    private $estado_ha;
    private $tabla="estado_habitacion";

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
        $sql="insert into {$this->tabla} values('0','{$this->estado_ha}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select id_estadoh, estado_ha from estado_habitacion";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from estado_habitacion where id_estadoh='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla}  where id_estadoh='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

        $sql="update {$this->tabla} set estado_ha='{$this->estado_ha}'where id_estadoh='{$this->id_estadoh}'";
        $this->conexion->QuerySimple($sql);
    }
    function verify(){
        $sql = "select * from {$this->tabla} where  estado_ha='{$this->estado_ha}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
}