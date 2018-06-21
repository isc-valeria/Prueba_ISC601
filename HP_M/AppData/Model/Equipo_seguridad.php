<?php


namespace AppData\Model;


class Equipo_seguridad
{
    private $tabla="equipo_seguridad";
    private $id_equiposegu;
    private $nombre_equisegu;
    private $id_tipoequisegu;
    private $cantidad;
    private $id_estadomantenimiento;

    function __construct()
    {
        $this->conexion= new conexion();
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
        $sql="insert into {$this->tabla} values('0','{$this->nombre_equisegu}','{$this->id_tipoequisegu}','{$this->cantidad}','{$this->id_estadomantenimiento}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll()
    {
        $sql="select equipo_seguridad.id_equiposegu, equipo_seguridad.nombre_equisegu, tipo_equiposegu.descripcion_tipo,
        equipo_seguridad.cantidad,estado_mantenimiento.descripcion_estadomantenimiento
        from equipo_seguridad,tipo_equiposegu,estado_mantenimiento 
        WHERE equipo_seguridad.id_tipoequisegu=tipo_equiposegu.id_tipoequisegu
        AND equipo_seguridad.id_estadomantenimiento=estado_mantenimiento.id_estadomantenimiento
        order by id_equiposegu ASC ";
        $datos= $this->conexion ->queryResultado($sql);
        return $datos;

    }
    function update()
    {
        $sql = "update equipo_seguridad set nombre_equisegu='{$this->nombre_equisegu}',
               id_tipoequisegu='{$this->id_tipoequisegu}',cantidad='{$this->cantidad}',id_estadomantenimiento='{$this->id_estadomantenimiento}'
                where id_equiposegu='{$this->id_equiposegu}'";
        $this->conexion->QuerySimple($sql);
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_equiposegu='{$id}'";
        $this->conexion->QuerySimple($sql);

    }
    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_equiposegu='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}
