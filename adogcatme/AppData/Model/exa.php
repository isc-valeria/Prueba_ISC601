<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class exa
{
    private $tabla="img";
    private $id, $fecha,$img,$descr,$titulo;
    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }
    function getAll()
    {
        $sql="SELECT * from img";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    
    function add()
    {    
        $stm=$this->conexion->proc($this->titulo,$this->fecha,$this->img,$this->descr);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id='{$id}'";
        $this->conexion->querysimple($sql);
    }
    function edit($id)
    {
        $sql="select id,titulo,fecha,img,descr from {$this->tabla} where id='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function getOne($id)
    {
        $sql="SELECT * FROM img where id='{$id}'";
        $datos=$this->conexion->queryResultados($sql);
        return $datos;
    }
    function update(){
        $stm=$this->conexion->proc2($this->titulo,$this->fecha,$this->img,$this->descr,$this->id);
        
    }
}