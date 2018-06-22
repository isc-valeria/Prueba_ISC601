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

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add()
    {
        $sql="insert into Facturacion(id_factura,id_asignares,total) values(0,'{$this->id_asignares}','{$this->total}')";

    }

    function getAll()
    {
        $sql="Select * from {$this->tabla}";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
        //$sql="select*from Facturacion";
        //$datos=$this->conexion->queryResultado($sql);
        //return $datos;
    }
    function get($atributo)
    {
        return $this->$atributo;

        //$sql="select*from {$this->tabla}";
        //$datos=$this->conexion->queryResultado($sql);
        //return $datos;
    }
    function update(){
       $sql = "update {$this->tabla} set id_factura='{$this->id_factura}',
              id_asignares='{$this->id_asignares}', total='{$this->total}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id){
        $sql="select * from  {$this->tabla} where id_factura='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_factura='{$id}'";
        $this->conexion->QuerySimple($sql);
    }




}
