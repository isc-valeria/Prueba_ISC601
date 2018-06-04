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

    function add(){
        $sql="insert into empleados VALUES ('0','{$this->nombre_emp}','{$this->ap_emp}','{this->}am_emp}',{$this->descripcion_puesto})";
        $this->conexion->QuerySimple($sql);


    }
    function delete()
    {
        $sql="delete from {$this->tabla} where id_empleado='{$id}'";
        $this->conexion->QuerySimple($sql);
    }


    function getAll(){
        $sql="SELECT empleados.id_empleado, empleados.nombre_emp, empleados.ap_emp, empleados.am_emp, puestos.id_puesto, turnos.hr_entrada, turnos.hr_salida FROM empleados,asigna_turno, puestos, turnos WHERE empleados.id_puesto=puestos.id_puesto AND empleados.id_empleado=asigna_turno.id_empleado AND turnos.id_turno=asigna_turno.id_turno ";
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
               ap_emp='{$this->ap_emp}', am_emp='{$this->am_emp}',
               descripcion_puesto='{$this->descripcion_puesto}' where id_empleado='{$this->id_empleado}'";
        $this->conexion->QuerySimple($sql);
    }
}