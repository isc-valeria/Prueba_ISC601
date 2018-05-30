<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */

namespace AppData\Model;


class Tareas
{
    private  $id_tarea;
    private  $id_tipotarea;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    function add(){



    }
    function get(){
        $sql="select*from Tareas";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update(){

    }
    function delete(){

    }

}