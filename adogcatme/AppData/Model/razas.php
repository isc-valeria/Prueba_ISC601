<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class razas
{
    private $tabla="razas";
    private $id_raza;
    private $raza_des;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor){
        $this->$atributo=$valor;
    }
    public function get($atributo){
        return $this->$atributo;
    }
    function add()
    {
        $sql="insert into razas values('0','{$this->raza_des}')";
        $this->conexion->querysimple($sql);
    }

    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_raza asc";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {
        $sql="update  {$this->tabla} set 
          raza_des='{$this->raza_des}' 
          where id_raza='{$this->id_raza}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id){

        $sql="select * from {$this->tabla} where id_raza={$id}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_raza='{$id}'";
        $this->conexion->querysimple($sql);
    }
}