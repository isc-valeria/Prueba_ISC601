<?php
/**
 * Created by PhpStorm.
 * User: Luis
 * Date: 20/05/2018
 * Time: 08:10 PM
 */

namespace AppData\Controller;


class checkinController
{
    private $checkin;
    private $tipos_habitacion;
    private $estador;

    public function __construct()
    {
        $this->checkin= new \AppData\Model\Checkin();
        $this->tipos_habitacion= new \AppData\Model\tipos_habitacion();
        $this->estador= new \AppData\Model\Estado_Reservacion();
    }

    public function mod($id)
    {
        $datos=$this->checkin->getTwo($id[0]);
        $datos=mysqli_fetch_array($datos);
        print_r(json_encode($datos));
    }

    public function index()
    {
        $datos1=$this->checkin->getAll();
        $result=$this->checkin->check();
        $datos2=$this->tipos_habitacion->getAll();
        $datos3=$this->estador->getAll();

        $datos[0]=$datos1;
        $datos[1]=$datos2;
        $datos[2]=$result;
//        $datos[3]=$datos3;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->checkin->getOne($id[0]);
        return $datos;
    }

    public function actualizar($id)
    {
        if ($_POST)
        {
            $this->checkin->set("clave_reserva",$id);
            $this->checkin->set("fecha_llegada",$_POST["fecha_llegada"]);
            $this->checkin->set("fecha_salida",$_POST["fecha_salida"]);
            $this->checkin->set("no_personas",$_POST["no_personas"]);
            $this->checkin->set("tipo_ha",$_POST["tipo_ha"]);
            $this->checkin->set("estado_ha",$_POST["estado_ha"]);
            $this->checkin->update();
            $datos1=$this->checkin->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }
}