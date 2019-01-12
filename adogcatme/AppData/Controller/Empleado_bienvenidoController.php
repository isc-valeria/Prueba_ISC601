<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 14/06/2018
 * Time: 09:09 PM
 */

namespace AppData\Controller;


class Empleado_bienvenidoController
{
    private $usuarios,$tipos_habitacion,$estado_habitaciones;
    public function __construct()
    {
        $this->usuarios= new \AppData\Model\Empleado_Bienvenido();
    }

    public function index()
    {
        $datos1=$this->usuarios->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function crear()
    {
        if($_POST)
        {
            $this->usuarios->set('nombre',$_POST["nombre"]);
            $this->usuarios->set('pass',$_POST["pass"]);

            $datos[1]=false;
            if(mysqli_num_rows($this->usuarios->verify())==0) {

                $this->usuarios->add();
                header("Location:".URL."Empleado_bienvenido");
                $datos[1]=true;
            }
            $datos[0]=$this->usuarios->getAll();
            header("Location:".URL."Empleado_bienvenido");
            return $datos;
        }
    }
    public function eliminar($id)
    {
        $this->usuarios->delete($id[0]);
        $datos1=$this->usuarios->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {

    }
    public function actualizar($id)
    {

    }
    public function print_pdf()
    {
        $datos=$this->usuarios->getAll();
        return $datos;
    }

}