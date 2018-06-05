<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:27 PM
 */

namespace AppData\Model;


class Asignaprenda_habitacion
{
    private $tabla="Asignaprenda_habitacion";
    private $id_asignaprenda;
    private $id_habitacion;
    private $id_registropren;

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
        $sql="insert into {$this->tabla} values('0','{$this->id_habitacion}','{$this->id_registropren}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Asignaprenda_habitacion.id_asignaprenda, Habitaciones.id_habitacion, Registro_prendas.id_registropren, 
        FROM Asignaprenda_habitacion, Habitaciones, Registro_prendas
        WHERE Asignaprenda_habitacion.id_habitacion=Habitaciones.id_habitacion AND
        Asignaprenda_habitacion.id_registropren=Registro_prendas.id_registropren  ORDER BY id_asignaprenda ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_asignaprenda='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_asignaprenda='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update Asignaprenda_habitacion set id_habitacion='{$this->id_habitacion}',
               id_registropren='{$this->id_registropren}'  where id_asignaprenda='{$this->id_asignaprenda}'";
        $this->conexion->QuerySimple($sql);
    }


}