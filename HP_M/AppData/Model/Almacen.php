<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:07 PM
 */

namespace AppData\Model;


class Almacen
{
    private $id_almacen;
    private $id_herramienta;
    private $id_equiposegu;

    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function get($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    function set($atributo)
    {
        return $this->$atributo;
    }

    function add(){

    }
    function getAll(){
        $sql="SELECT productos.id_producto, productos.nombre_pro, categorias_producto.descripcion_cat, 
tipos_producto.descripcion_pro, productos.existencias, productos.stock_min, productos.stock_max FROM 
productos, categorias_producto, tipos_producto WHERE productos.id_categoriapro=categorias_producto.id_categoriapro AND 
tipos_producto.id_tipopro=productos.id_tipopro ORDER BY `productos`.`id_producto` ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}