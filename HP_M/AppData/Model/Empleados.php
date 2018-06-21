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
    private $codigo;
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
         '{$this->ap_emp}','{$this->am_emp}',{$this->id_puesto},{$this->id_turno},{$this->codigo})";
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
        empleados.ap_emp, empleados.am_emp, puestos.descripcion_puesto , turnos.descripcion_turno ,turnos.hr_entrada, turnos.hr_salida ,empleados.codigo FROM empleados,puestos, turnos
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
               ap_emp='{$this->ap_emp}', am_emp='{$this->am_emp}',id_puesto='{$this->id_puesto}',id_turno='{$this->id_turno}',codigo='{$this->codigo}'
                where id_empleado='
                where id_empleado='{$this->id_empleado}'";
        $this->conexion->QuerySimple($sql);
    }
    function verify()
    {
        $sql = "select * from {$this->tabla} where nombre_emp='{$this->nombre_emp}'";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }

    function graficar()
    {
        $sql="select empleados.id_empleado,puestos.descripcion_puesto as Puesto, COUNT(descripcion_puesto) as Cantidad_Empleados 
        from empleados, puestos where empleados.id_puesto = puestos.id_puesto GROUP BY descripcion_puesto";
        $dato = $this->conexion->QueryResultado($sql);
        return $dato;
    }
}