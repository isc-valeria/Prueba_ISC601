<?php


namespace AppData\Model;


class Tipo_equiposegu
{
    private $tabla="tipo_equiposegu";
    private  $id_tipoequisegu;
    private  $descripcion_tipo;

    function __construct()
    {
        $this->conexion=new conexion();
    }
    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

        $sql="insert into {$this->tabla} values('0','{$this->descripcion_tipo}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update tipo_equiposegu set descripcion_tipo='{$this->descripcion_tipo}'
                where id_tipoequisegu='{$this->id_tipoequisegu}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_tipoequisegu='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_tipoequisegu='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}
