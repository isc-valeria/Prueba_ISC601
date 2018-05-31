<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 09/05/2018
 * Time: 02:27 PM
 */

namespace AppData\Model;


class Registro_prendas
{
    private $id_registropren;
    private $fecha_entrega;
    private $fecha_recepcion;
    private $id_tipopren;
    private $id_estadop;
    private $conexion;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){

    }
    function getAll(){
        $sql="select * from Registro_prendas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }
}