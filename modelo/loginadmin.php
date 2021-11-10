<?php
    require_once ("../config/conexion.php");
class Admin{
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
            self::$instance = new Admin();
        }
        return self::$instance;
    }
    public function verificaadmin($ci,$contra){
        $consultabdverifica="SELECT * FROM administrador WHERE ci_admin='$ci' AND contrasenia='$contra'";
        $ejecucionverificar =mysqli_query((Conectar::getInstance()->conexion()),$consultabdverifica);
            $datosadmin = $ejecucionverificar->num_rows;

            if($datosadmin==1)
            {
                //devolver 1 si hubo coincidencia
                return 1;
            }
            else
            {
                //devolver 0 si no hubo coincidencia
                return 0;
            }
    }
    public function verificausu($ci,$contra){
        $consultabdverifica="SELECT * FROM registrocliente WHERE ci_cliente='$ci' AND contrasenia='$contra'";
        $ejecucionverificar =mysqli_query((Conectar::getInstance()->conexion()),$consultabdverifica);
            $datosusuario = $ejecucionverificar->num_rows;

            if($datosusuario==1)
            {
                //devolver 1 si hubo coincidencia
                return 1;
            }
            else
            {
                //devolver 0 si no hubo coincidencia
                return 0;
            }
    }
    public function verificausuplato($ci,$plato){
        $consultabdverificausuario="SELECT * FROM registrocliente WHERE ci_cliente='$ci'";
        $ejecucionverificar =mysqli_query((Conectar::getInstance()->conexion()),$consultabdverificausuario);
        $datosusuario = $ejecucionverificar->num_rows;
        
        $consultabdverificaplato="SELECT * FROM platos WHERE nombreplato='$plato'";
        $ejecucionverificar2 =mysqli_query((Conectar::getInstance()->conexion()),$consultabdverificaplato);
        $datosplato = $ejecucionverificar2->num_rows;
            if($datosusuario==1 && $datosplato==1)
            {
                //devolver 1 si hubo coincidencia
                return 1;
            }
            else
            {
                //devolver 0 si no hubo coincidencia
                return 0;
            }
    }
}
?>