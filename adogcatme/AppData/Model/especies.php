<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class especies
{
    private $tabla="especies";
    private $id_especie;
    private $especies_des;

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
        $sql="insert into razas values('0','{$this->especies_des}')";
        $this->conexion->querysimple($sql);
    }

    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_especie asc";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {
        $sql="update  {$this->tabla} set 
          especies_des='{$this->especies_des}' 
          where id_especie='{$this->id_especie}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id){

        $sql="select * from {$this->tabla} where id_especie={$id}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_especie='{$id}'";
        $this->conexion->querysimple($sql);
    }
}