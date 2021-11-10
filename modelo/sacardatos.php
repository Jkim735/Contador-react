<?php
    require_once ("../proyecto_formativo/config/conexion.php");
class SacarDatos{
    private $datosbd;
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { 
            $this->datosbd = array(); /*array vacio para almacenar consultas*/ 
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new SacarDatos();
        }
        return self::$instance;
    }
    public function sacardatosbd(){
    $datosbd = "SELECT platos.nombreplato,platos.precio,platos.descripcion,platos.imgplato,administrador.nombres,administrador.apaterno,administrador.amaterno,administrador.correo,administrador.telefono FROM platos INNER JOIN administrador ON platos.ciadmin = administrador.ci_admin";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$datosbd);
        while($fila = $ejecucion->fetch_assoc()) /*mientras existan filas*/ 
            {
                //Result.fetch_assoc();
                $this->pro[]=$fila; /*Corchetes vacios[]: guardar en 1ra posicion disponible */
                /*almacenar cada fila de tabla en array vacio
                pro[0]=(fila 1 de la consulta)
                pro[1]=(fila 2 de la consulta)
                     ...
                */ 
            }

            //devolver productos
            return $this->pro;
    }
}
?>