<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 14/06/2018
 * Time: 08:47 AM
 */

namespace AppData\Controller;


class servicioslavanderiaController
{
    private $servicio;

    public function __construct()
    {
        $this->servicio= new \AppData\Model\Servicios_lavanderia();
    }

    public function index(){
        $datos1=$this->servicio->getAll();

        $datos[0]=$datos1;

        return $datos;
    }

    public function crear(){
        //echo "fsdfsdfasdasdasas";
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
            $this->servicio->set('descripcion_servicio', $_POST["nombre_servi"]);
            $this->servicio->set('precio', $_POST["precio"]);
            $this->servicio->add();
            $datos1=$this->servicio->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }

    public function eliminar($id)
    {
        $this->servicio->delete($id[0]);
        $datos1=$this->servicio->getAll();
        $datos[0]=$datos1;
        return $datos;
    }

    public function modificar($id)
    {
        $datos1=$this->servicio->getOne($id[0]);
        return $datos1;
    }

    public function actualizar($id)
    {
        if ($_POST) {
            $this->servicio->set("id_serviciolav", $id[0]);
            $this->servicio->set('descripcion_servicio', $_POST["nombre_servi"]);
            $this->servicio->set('precio', $_POST["precio"]);
            $this->servicio->update();
            $datos1 = $this->servicio->getAll();
            $datos[0] = $datos1;
            return $datos;
        }
    }

    public function print_pdf()
    {
        $datos=$this->servicio->getAll();
        return $datos;
    }

    public function graficar()
    {

    }


}