<?php
    require_once ("../config/conexion.php");
class DatosReservas{
    private $datosplatoreservas;
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { 
            $this->datosplatoreservas = array(); /*array vacio para almacenar consultas*/ 
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new DatosReservas();
        }
        return self::$instance;
    }
    public function sacardatosreservas(){
    $datosplareservas = "SELECT reservas.id_reserva,registrocliente.nombres,registrocliente.apaterno,registrocliente.amaterno,reservas.fecha_entrega,reservas.hora_entrega,reservas.cantidad_platos,reservas.plato,reservas.telefono_referecia,reservas.destino_direccion FROM reservas INNER JOIN registrocliente ON reservas.cliente =registrocliente.ci_cliente";
        $ejecucionreservas =mysqli_query((Conectar::getInstance()->conexion()),$datosplareservas);
        while($filareserva = $ejecucionreservas->fetch_assoc()) /*mientras existan filas*/ 
            {
                //Result.fetch_assoc();
                $this->datosplatoreservas[]=$filareserva; /*Corchetes vacios[]: guardar en 1ra posicion disponible */
                /*almacenar cada fila de tabla en array vacio
                pro[0]=(fila 1 de la consulta)
                pro[1]=(fila 2 de la consulta)
                     ...
                */ 
            }

            //devolver productos
            return $this->datosplatoreservas;
    }
}
?>