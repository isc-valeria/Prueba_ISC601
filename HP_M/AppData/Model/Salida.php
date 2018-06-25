<?php


namespace AppData\Model;


class Salida
{
    private  $tabla="Salida";
    private $id_empleado;
    private $fecha_salida;
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

        $sql="insert into {$this->tabla} values('0',{$this->id_empleado},'{$this->fecha_salida}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){

        $sql="SELECT Salida.id_salida ,Salida.fecha_salida, empleados.codigo FROM Salida,empleados
         WHERE Salida.id_salida=empleados.id_empleado ";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_salida='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }


}