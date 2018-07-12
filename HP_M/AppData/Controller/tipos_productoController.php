<?php
/**
 * Created by PhpStorm.
 * User: JAZMIN
 * Date: 10/05/2018
 * Time: 01:12 PM
 */

namespace AppData\Controller;

class tipos_productoController
{
    private $descripcion_pro;
    public function __construct()
    {
        $this->descripcion_pro=new \AppData\Model\Tipos_producto();
    }

    public function index()
    {
        $datos1= $this->descripcion_pro->getAll();
        $datos[0]=$datos1;

        return $datos;
    }
    
     public function crear()
    {
        print_r($_POST);
        if($_POST)
        {
            $this->descripcion_pro->set("descripcion_pro",$_POST['descripcion_pro']);
            $this->descripcion_pro->add();
            $datos1=$this->descripcion_pro->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->descripcion_pro->delete($id[0]);
        $datos1=$this->descripcion_pro->getAll();
        $datos[0]=$datos1;

        return $datos;
    }

    public function modificar($id)
    {
        $datos=$this->descripcion_pro->getOne($id[0]);
        return $datos;
    }
      public function actualizar($id)
    {
        if($_POST)
        {
            $this->descripcion_pro->set("id_tipopro",$id[0]);
            $this->descripcion_pro->set('descripcion_pro',$_POST["descripcion_pro"]);
            $this->descripcion_pro->update();
            $datos1=$this->descripcion_pro->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
    public function print_pdf()
    {
        $datos=$this->descripcion_pro->getAll();
        return $datos;
    }

}