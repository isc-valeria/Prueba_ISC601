<?php
/**
 * Created by PhpStorm.
 * User: Mutsorini
 * Date: 17/06/2018
 * Time: 01:54 PM
 */

namespace AppData\Controller;


class tipos_habitacionController
{

    private $tipos_habitacion;

    public function __construct()
    {
        $this->tipos_habitacion= new \AppData\Model\tipos_habitacion();
    }

    public function index()
    {
        $datos[0]=$this->tipos_habitacion->getAll();
        return $datos;
    }

    public function crear(){
        if($_POST)
        {
            $this->tipos_habitacion->set('tipo_ha',$_POST["tipo_ha"]);
            $this->tipos_habitacion->set('precio',$_POST["precio"]);
            $this->tipos_habitacion->set('maximo_personas',$_POST["maximo_personas"]);

            $datos[1]=false;
            if(mysqli_num_rows($this->tipos_habitacion->verify())==0) {

                $this->tipos_habitacion->add();
                $datos[1]=true;
            }
            $datos[0]=$this->tipos_habitacion->getAll();
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->tipos_habitacion->delete($id[0]);
        $datos[0]=$this->tipos_habitacion->getAll();
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->tipos_habitacion->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->tipos_habitacion->set("id_tipoh",$id[0]);
            $this->tipos_habitacion->set('tipo_ha',$_POST["tipo_ha"]);
            $this->tipos_habitacion->set('precio',$_POST["precio"]);
            $this->tipos_habitacion->set('maximo_personas',$_POST["maximo_personas"]);
            $this->tipos_habitacion->update();
            $datos[0]=$this->tipos_habitacion->getAll();
            return $datos;
        }
    }

}