<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 08/05/2018
 * Time: 02:30 PM
 */

    namespace AppData\Model;


class lista
{
    private $tabla = "animal";
    private $id_animal;
    private $nombre;
    private $edad;
    private $color;
    private $id_raza;
    private $id_seco;
    private $id_tipo;
    private $id_especie;

    function __construct()
    {
        $this->conexion = new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql = "insert into {$this->tabla} values('0','{$this->nombre}',
         '{$this->edad}','{$this->color}','{$this->id_raza}','{$this->id_seco}','{$this->id_tipo}'
         ,'{$this->id_especie}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql = "SELECT animal.id_animal, animal.nombre, animal.edad, animal.color, razas.raza_des,
        sexos.sexo_des, tipos.tipo_des, especies.especies_des
        FROM animal,sexos,especies,tipos,razas
        WHERE animal.id_raza=razas.id_raza
        AND animal.id_seco=sexos.id_sexo
         AND animal.id_tipo=tipos.id_tipo
         AND animal.id_especie=especies.id_especie ORDER BY id_animal ASC ";
        $datos = $this->conexion->queryResultados($sql);
        return $datos;
    }



    function delete($id)
    {
        $sql = "delete from {$this->tabla} where id_animal='{$id}'";
        $this->conexion->QuerySimple($sql);
    }

    function getOne($id)
    {
        $sql = "select * from  {$this->tabla} where id_animal='{$id}'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function update()
    {
        $sql = "update {$this->tabla} set nombre='{$this->nombre}',
               edad='{$this->edad}', color='{$this->color}',
               id_raza='{$this->id_raza}',id_seco='{$this->id_seco}',id_tipo='{$this->id_tipo}'
                ,id_especie='{$this->id_especie}'where id_animal='{$this->id_animal}'";
        $this->conexion->QuerySimple($sql);
    }

    function verify()
    {

    }

    function graficar()
    {

    }
}