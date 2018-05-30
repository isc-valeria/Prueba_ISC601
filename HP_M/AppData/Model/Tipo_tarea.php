<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */

namespace AppData\Model;


class Tipo_tarea
{
    private  $id_tipotarea;
    private  $descripcion_tarea;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){



    }
    function get(){
        $sql="select*from Tipo_tarea";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}