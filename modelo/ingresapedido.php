<?php
    require_once ("../config/conexion.php");
class Pedidos{
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Pedidos();
        }
        return self::$instance;
    }
    public function registrapedido($fechaen,$horaen,$cantidadpla,$telefono,$destino,$plato,$ci){
        // $consultabdpedidos="INSERT INTO reservas (fecha_entrega, hora_entrega, cantidad_platos,telefono_referecia,destino_direccion,cliente,plato) 
        // VALUES ('$fechaen','$horaen','$cantidadpla','$telefono','$destino','$plato')";
        $consultabdpedidos="INSERT INTO reservas(fecha_entrega, hora_entrega, cantidad_platos, telefono_referecia, destino_direccion, cliente, plato) VALUES ('$fechaen','$horaen','$cantidadpla','$telefono','$destino','$ci','$plato')";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultabdpedidos);
        return $ejecucion;
    }
}

// $con1 = Connection::getInstance();
// $quer = $con->query("select * from user");
// // Otra forma seria
// $quer = Connection::getInstance()->query("select * from user");
?>