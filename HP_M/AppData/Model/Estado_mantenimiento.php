<?php


namespace AppData\Model;


class Estado_mantenimiento
{
    private $tabla="estado_mantenimiento";
    private  $id_estadomantenimiento;
    private  $descripcion_estadomantenimiento;

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

        $sql="insert into {$this->tabla} values('0','{$this->descripcion_estadomantenimiento}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update estado_mantenimiento set descripcion_estadomantenimiento='{$this->descripcion_estadomantenimiento}'
                where id_estadomantenimiento='{$this->id_estadomantenimiento}'";
        $this->conexion->QuerySimple($sql);

    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_estadomantenimiento='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_estadomantenimiento='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }


}