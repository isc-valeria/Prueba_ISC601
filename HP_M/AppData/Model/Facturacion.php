<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:46 PM
 */

namespace AppData\Model;


class Facturacion
{
    private  $tabla="Facturacion";
    private $id_factura;
    private $id_asignares;
    private $total;
    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add()
    {
        $sql="insert into facturacion VALUES ('0','{$this->id_factura}','{$this->id_asignares}','{$this->total}')";
        $this->conexion->QuerySimple($sql);
    }
    function getAll(){
        $sql="select*from facturacion";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }
}