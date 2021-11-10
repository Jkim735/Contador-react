<?php
    require_once ("../config/conexion.php");
class Eliminaplatomodelo{
    // private $datosplato;
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { 
            /*$this->datosplato = array(); array vacio para almacenar consultas*/ 
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Eliminaplatomodelo();
        }
        return self::$instance;
    }
    public function eliminapla($nom){
        $consultaeliminar="DELETE FROM platos where nombreplato='$nom'";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultaeliminar);
        return $ejecucion;
    }
}
?>

