<?php
/**
 * Created by PhpStorm.
 * User: joseluis
 * Date: 16/05/2018
 * Time: 12:06 PM
 */
namespace AppData\Model;
class Tareas
{
    private  $id_tarea;
    private  $id_tipotarea;
    private  $id_empleado;
    private  $id_habitacion;
    private  $fecha_inicio;
    private  $fecha_fin;

    private $tabla="tareas";


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

    function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->id_tipotarea}','{$this->id_empleado}','{$this->id_habitacion}','{$this->fecha_inicio}','{$this->fecha_fin}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="select id_tarea,tipo_tarea.descripcion_tarea, empleados.nombre_emp,habitaciones.num_habitacion,fecha_inicio,fecha_fin 
              from tareas, tipo_tarea,empleados,habitaciones 
              WHERE tareas.id_tipotarea=tipo_tarea.id_tipotarea 
              and tareas.id_empleado=empleados.id_empleado 
              and tareas.id_habitacion=habitaciones.id_habitacion";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

    function delete($id)
    {
        $sql="delete from tareas where id_tarea='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function getOne($id)
    {
        $sql="select * from  tareas where id_tarea='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function update(){
        $sql="";
        $this->conexion->QuerySimple($sql);
    }
}