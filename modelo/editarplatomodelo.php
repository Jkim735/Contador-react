<?php
    require_once ("../config/conexion.php");
class Editarplatomodelo{
    // private $datosplato;
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { 
            $this->datosplato = array(); /*array vacio para almacenar consultas*/ 
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Editarplatomodelo();
        }
        return self::$instance;
    }
    public function editarpla($nom,$pre,$descri,$foto){
        $consultabd="UPDATE `platos` SET `nombreplato`='$nom',`precio`='$pre',`descripcion`='$descri',`imgplato`='$foto' WHERE nombreplato='$nom'";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultabd);
        return $ejecucion;
    }
}
?>