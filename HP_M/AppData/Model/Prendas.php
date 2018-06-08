<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:25 PM
 */

namespace AppData\Model;


class Prendas
{
    private $tabla="prendas";
    private $id_prenda;
    private $codigo_prenda;
    private $id_serviciolavanderia;
    private $id_tipoprenda;
    private $precio;

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
        $sql="insert into {$this->tabla} values('0','{$this->codigo_prenda}',
         '{$this->id_serviciolavanderia}','{$this->id_tipoprenda}','{$this->precio}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT Prendas.id_prenda, Prendas.codigo_prenda, Servicios_lavanderia.nombre_servicio, Tipos_prendas.descripcion_prenda, Prendas.precio 
        FROM Prendas, Tipos_prendas, Servicios_lavanderia 
        WHERE Prendas.id_serviciolavanderia = Servicios_lavanderia.id_serviciolavanderia 
        AND Prendas.id_tipoprenda = Tipos_prendas.id_tipoprenda ORDER BY id_prenda ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_prenda='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_prenda='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="update Prendas set codigo_prenda='{$this->codigo_prenda}',
               id_serviciolavanderia='{$this->id_serviciolavanderia}', id_tipoprenda='{$this->id_tipoprenda}',
               precio='{$this->precio}' where id_prenda='{$this->id_prenda}'";
        $this->conexion->QuerySimple($sql);
    }
}