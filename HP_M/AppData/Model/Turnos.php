<?php

namespace AppData\Model;

class Turnos
{
    private  $tabla="Turnos";
    private $id_turno;
    private $hr_entrada;
    private  $hr_salida;
    private $descripcion_turno;
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
        $sql="insert into {$this->tabla} values('0','{$this->descripcion_turno}','{$this->hr_entrada}','{$this->hr_salida}')";
        $this->conexion->QuerySimple($sql);
    }

        function getAll()
        {
            $sql="select *from {$this->tabla}";
            $datos=$this->conexion->queryResultado($sql);
            return $datos;
        }
        function update()
        {
            $sql = "update turnos set descripcion_turno='{$this->descripcion_turno}',hr_entrada='{$this->hr_entrada}',hr_salida='{$this->hr_salida}'
                    where id_turno='{$this->id_turno}'";
            $this->conexion->QuerySimple($sql);

        }
        function delete($id)
        {
            $sql="delete from {$this->tabla} where id_turno='{$id}'";
            $this->conexion->QuerySimple($sql);

        }
        function getOne($id)
        {
            $sql = "select * from  {$this->tabla} where id_turno='{$id}'";
            $datos = $this->conexion->QueryResultado($sql);
            return $datos;

        }
}



