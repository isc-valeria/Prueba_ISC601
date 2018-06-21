<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15/06/2018
 * Time: 08:12 PM
 */

namespace AppData\Controller;


class observacionesController
{
    private $observaciones;

    public function __construct()
    {
        $this->observaciones= new \AppData\Model\Observaciones();
    }

    public function index(){
        $datos2=$this->observaciones->getAll();

        $datos["observaciones"]=$datos2;

        return $datos;
    }

    public function crear(){
        //echo "fsdfsdfasdasdasas";
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
            $this->observaciones->set('descripcion_observacion', $_POST["descripcion_observacion"]);
            $this->observaciones->set('cargo', $_POST["cargo"]);
            $this->observaciones->add();
            $datos2=$this->observaciones->getAll();
            $datos["observaciones"]=$datos2;
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->observaciones->delete($id[0]);
        $datos2=$this->observaciones->getAll();
        $datos["observaciones"]=$datos2;
        return $datos;
    }

    public function modificar($id)
    {
        $datos2=$this->observaciones->getOne($id[0]);
        return $datos2;
    }

    public function actualizar($id)
    {
        if ($_POST) {
            $this->observaciones->set("id_observacion", $id[0]);
            $this->observaciones->set('descripcion_observacion', $_POST["descripcion_observacion"]);
            $this->observaciones->set('cargo', $_POST["cargo"]);
            $this->observaciones->update();
            $datos2 = $this->observaciones->getAll();
            $datos["observaciones"] = $datos2;
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->observaciones->getAll();
        return $datos;
    }
}