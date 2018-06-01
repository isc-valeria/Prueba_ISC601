<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:05 PM
 */

namespace AppData\Model;


class Estado_herra
{
    private $id_estadoherra;
    private $estado_herra;


    function __construct()
    {
        $this->conexion= new conexion();
    }
    function add()
    {

    }
    function get()
    {
        $sql="select * from Estado_herra";
        $datos= $this->conexion ->queryResultados($sql);
        return $datos;
    }
    function update()
    {

    }
    function delete()
    {

    }
}