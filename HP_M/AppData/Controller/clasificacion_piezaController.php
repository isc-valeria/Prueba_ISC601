<?php

namespace AppData\Controller;


class clasificacion_piezaController
{
    private $clasi_pieza;

    public function __construct()
    {
        $this->clasi_pieza= new \AppData\Model\Clasificacion_pieza();
    }

    public function index(){
        $datos4=$this->clasi_pieza->getAll();
        $datos["clasi_pieza"]=$datos4;
        return $datos;
    }

    public function crear(){
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
           $this->clasi_pieza->set('descripcion_pieza', $_POST["descripcion_pieza"]);
           $this->clasi_pieza->set('cantidad', $_POST["cantidad"]);
           $this->clasi_pieza->set('id_serviciolav', $_POST["descripcion_serviciopieza"]);
           $this->clasi_pieza->set('id_observacion', $_POST["descripcion_observacionpieza"]);
           $this->clasi_pieza->add();
           $datos4=$this->clasi_pieza->getAll();
           $datos["clasi_pieza"]=$datos4;
           return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->clasi_pieza->delete($id[0]);
        $datos4=$this->clasi_pieza->getAll();
        $datos["clasi_pieza"]=$datos4;
        return $datos;
    }

    public function modificar($id)
    {
        $datos4=$this->clasi_pieza->getOne($id[0]);
        return $datos4;
    }

    public function actualizar($id)
    {
        if ($_POST) {

            $this->clasi_pieza->set("id_clasificacionpieza", $id[0]);
            $this->clasi_pieza->set('descripcion_pieza', $_POST["descripcion_pieza"]);
            $this->clasi_pieza->set('cantidad', $_POST["cantidad"]);
            $this->clasi_pieza->set('id_serviciolav', $_POST["descripcion_serviciopieza"]);
            $this->clasi_pieza->set('id_observacion', $_POST["descripcion_observacionpieza"]);

            $this->clasi_pieza->update();
            $datos4 = $this->clasi_pieza->getAll();
            $datos["clasi_pieza"] = $datos4;
            return $datos;
        }
    }


}