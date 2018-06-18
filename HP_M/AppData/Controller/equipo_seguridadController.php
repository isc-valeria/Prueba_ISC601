<?php


namespace AppData\Controller;


class equipo_seguridadController
{
    private $equipo_seguridad,$tipo_equiposegu;

    public function __construct()
    {
        $this->equipo_seguridad= new \AppData\Model\Equipo_seguridad();
        $this->tipo_equiposegu=new \AppData\Model\Tipo_equiposegu();

    }

    public function index()
    {
        $datos1=$this->equipo_seguridad->getAll();
        $datos2=$this->tipo_equiposegu->getAll();
        $datos[0]=$datos1;
        $datos[1]=$datos2;
        return $datos;
    }
    public function crear()
    {
        if($_POST)
        {
            $this->equipo_seguridad->set('nombre_equisegu',$_POST["nombre_equisegu"]);
            $this->equipo_seguridad->set('id_tipoequisegu',$_POST["descripcion_tipo"]);
            $this->equipo_seguridad->add();
            $datos1=$this->equipo_seguridad->getAll();
            $datos[0]=$datos1;
            return $datos;
        }

    }
    public function eliminar($id)
    {
        $this->equipo_seguridad->delete($id[0]);
        $datos1=$this->equipo_seguridad->getAll();
        $datos[0]=$datos1;
        return $datos;
    }
    public function modificar($id)
    {
        $datos=$this->equipo_seguridad->getOne($id[0]);
        return $datos;
    }
    public function actualizar($id)
    {
        if($_POST)
        {
            $this->equipo_seguridad->set("id_equiposegu",$id[0]);
            $this->equipo_seguridad->set('nombre_equisegu',$_POST["nombre_equisegu"]);
            $this->equipo_seguridad->set('id_tipoequisegu',$_POST["descripcion_tipo"]);
            $this->equipo_seguridad->update();
            $datos1=$this->equipo_seguridad->getAll();
            $datos[0]=$datos1;
            return $datos;
        }
    }


}
