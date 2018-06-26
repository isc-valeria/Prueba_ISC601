<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/06/2018
 * Time: 12:14 PM
 */

namespace AppData\Model;


class ReservacionesCliente
{
    private $tabla = "reservaciones";
    private $id_reservacion;
    private $clave_reserva;
    private $id_cliente;
    private $fecha_reserva;
    private $fecha_llegada;
    private $fecha_salida;
    private $id_estador=63;
    private $no_personas;
    private $num_habitacion;
    private $descripcion_hab;
    private $id_tipoh;
    private $id_estadoh=60;

    private $fecha1;
    private $fecha2;

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
        $sql="call NuevaReserva (
         '{$this->clave_reserva}','{$this->id_cliente}','{$this->fecha_reserva}','{$this->fecha_llegada}',
         '{$this->fecha_salida}','{$this->id_estador}')";
        $this->conexion->QuerySimple($sql);

    }

    function getAll()
    {
        $sql = "select * from tipos_habitacion";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }

    function getAllHabitaciones()
    {
        $fi = str_replace(',','' ,$this->fecha_inicio);
        $ff = str_replace(',','',$this->fecha_fin);
        
        $sql = "SELECT habitaciones.id_habitacion, habitaciones.num_habitacion, habitaciones.descripcion_hab, 				
                                tipos_habitacion.tipo_ha, tipos_habitacion.maximo_personas,tipos_habitacion.precio
                                FROM habitaciones, tipos_habitacion, reservaciones, asigna_reservaciones
                                WHERE reservaciones.id_reservacion=asigna_reservaciones.id_reservacion
		AND asigna_reservaciones.id_habitacion=habitaciones.id_habitacion
        AND habitaciones.id_tipoh=tipos_habitacion.id_tipoh
		AND reservaciones.fecha_llegada not BETWEEN '2018-10-08 ' and '2018-10-12'
		AND reservaciones.fecha_salida not BETWEEN '2018-10-08 ' and '2018-10-12'";
        $datos = $this->conexion->QueryResultado($sql);
        return $datos;
    }


}