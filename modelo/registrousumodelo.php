<?php
    require_once ("../config/conexion.php");
class Usuarios{
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
            self::$instance = new Usuarios();
        }
        return self::$instance;
    }
    public function ingresausuarios($ci,$nombres,$apa,$ama,$edad,$email,$contra,$tele,$direccion){
        $consultabd="INSERT registrocliente (ci_cliente, nombres, apaterno,amaterno,edad, correo,contrasenia,telefono,direccion) 
        VALUES ('$ci','$nombres','$apa','$ama','$edad','$email','$contra','$tele','$direccion')";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultabd);
        return $ejecucion;
    }
}

// $con1 = Connection::getInstance();
// $quer = $con->query("select * from user");
// // Otra forma seria
// $quer = Connection::getInstance()->query("select * from user");
?>