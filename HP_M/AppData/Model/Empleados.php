<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 09/05/2018
 * Time: 09:47 PM
 */

namespace AppData\Model;


class Empleados
{
    private  $tabla="empleados";
    private $id_empleado;
    private $nombre_emp;
    private $ap_emp;
    private $am_emp;
    private $descripcion_puesto;
    private $id_puesto;

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
        $sql="insert into {$this->tabla} values('0','{$this->nombre_emp}',
         '{$this->ap_emp}','{$this->am_emp}',{$this->id_puesto},{$this->id_turno})";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_empleado='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT empleados.id_empleado, empleados.nombre_emp,
        empleados.ap_emp, empleados.am_emp, puestos.descripcion_puesto , turnos.descripcion_turno ,turnos.hr_entrada, turnos.hr_salida FROM empleados,puestos, turnos
         WHERE empleados.id_puesto=puestos.id_puesto  and empleados.id_turno=turnos.id_turno ";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }

    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_empleado='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update()
    {
        $sql = "update empleados set nombre_emp='{$this->nombre_emp}',
               ap_emp='{$this->ap_emp}', am_emp='{$this->am_emp}',id_puesto='{$this->id_puesto}',id_turno='{$this->id_turno}'
                where id_empleado='{$this->id_empleado}'";
        $this->conexion->QuerySimple($sql);
    }
}