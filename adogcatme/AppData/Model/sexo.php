<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 08/05/2018
 * Time: 02:43 PM
 */

namespace AppData\Model;


class sexo
{
    private $tabla="sexos";
    private $id_sexo;
    private $sexo_des;

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
        $sql="insert into sexos values('0','{$this->sexo_des}')";
        $this->conexion->querysimple($sql);
    }

    function getAll()
    {
        $sql="select * from {$this->tabla} order by id_sexo asc";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update()
    {
        $sql="update  {$this->tabla} set 
          sexo_des='{$this->sexo_des}' 
          where id_sexo='{$this->id_sexo}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id){

        $sql="select * from {$this->tabla} where id_sexo={$id}";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_sexo='{$id}'";
        $this->conexion->querysimple($sql);
    }
}