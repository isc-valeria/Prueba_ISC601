<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 10:52 PM
 */

namespace AppData\Controller;


class ticketController
{

    private $clasi_kilo;
    private $observaciones;
    private $clasi_pieza;
    private $venta_kilo;
    private $venta_pieza;
    private $ticket;

    public function __construct()
    {
        $this->servicio= new \AppData\Model\Servicios_lavanderia();
        $this->observaciones= new \AppData\Model\Observaciones();
        $this->clasi_kilo= new \AppData\Model\Clasificacion_kilo();
        $this->clasi_pieza= new \AppData\Model\Clasificacion_pieza();
        $this->venta_kilo= new \AppData\Model\Ventahab_kilo();
        $this->venta_pieza= new \AppData\Model\Ventahab_pieza();
        $this->ticket= new \AppData\Model\Ticket();
    }

    public function index()
    {
        $datos1=$this->servicio->getAll();
        $datos2=$this->observaciones->getAll();
        $datos3=$this->clasi_kilo->getAll();
        $datos4=$this->clasi_pieza->getAll();
        $datos5=$this->venta_kilo->getAll();
        $datos6=$this->venta_pieza->getAll();
        $datos7=$this->ticket->getAll();

        $datos["servicio"]=$datos1;
        $datos["observaciones"]=$datos2;
        $datos["clasi_kilo"]=$datos3;
        $datos["clasi_pieza"]=$datos4;
        $datos["venta_kilo"]=$datos5;
        $datos["venta_pieza"]=$datos6;
        $datos["ticket"]=$datos7;
        return $datos;
    }

    public function crear(){
        //echo "fsdfsdfasdasdasas";
        if(isset($_POST))
        {
            //echo "asdasdadasdasd";
            //$this->servicio->set('descripcion_servicio', $_POST["nombre_servi"]);
            //$this->servicio->set('precio', $_POST["precio"]);
            //$this->servicio->add();
            //$datos1=$this->servicio->getAll();
            //$datos[0]=$datos1;
            //return $datos;
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
        $datos=$this->servicio->getOne($id[0]);
        return $datos;
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



}