<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:26 PM
 */

namespace AppData\Model;


class Tratamientos
{
    private $tabla="Tratamientos";
    private $id_tratamiento;
    private $descripcion_trata;
    private $id_precio;



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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_trata}','{$this->id_precio}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Tratamientos.id_tratamiento, Tratamientos.descripcion_trata, Precios.id_precio 
        FROM Tratamientos,Precios
        WHERE Tratamientos.id_precio=Precios.id_precio  ORDER BY id_tratamiento ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tratamiento='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_tratamiento='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update(){
        $sql="update Tratamientos set descripcion_trata='{$this->descripcion_trata}',
               id_precio='{$this->id_precios}'  where id_tratamiento='{$this->id_tratamiento}'";
        $this->conexion->QuerySimple($sql);
    }
}