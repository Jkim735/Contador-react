<?php
    require_once ("../config/conexion.php");
class RegistraPlatos{
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
            self::$instance = new RegistraPlatos();
        }
        return self::$instance;
    }
    public function registraplatos($ci,$nombreplato,$precio,$descripcion,$destino){
        $consultabdverifica="SELECT * FROM administrador WHERE ci_admin='$ci'";
        $ejecucionverificar =mysqli_query((Conectar::getInstance()->conexion()),$consultabdverifica);
            $datosadmin = $ejecucionverificar->num_rows;
            if($datosadmin==1)
            {
                $consultabd="INSERT platos (nombreplato, precio, descripcion,imgplato,ciadmin) 
                VALUES ('$nombreplato','$precio','$descripcion','$destino','$ci')";
                $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultabd);
                //devolver 1 si hubo coincidencia
                return $ejecucion;
            }
            else
            {
                //devolver 0 si no hubo coincidencia
                return 0;
            }
    }
}
?>