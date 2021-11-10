<?php
    require_once ("../config/conexion.php");
class DatosClient{
    private $datoscliente;
    // Contenedor instancia de la clase
    private static $instance = NULL;
    // static $obj;
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { 
            $this->datoscliente = array(); /*array vacio para almacenar consultas*/ 
    }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new DatosClient();
        }
        return self::$instance;
    }
    public function sacardatosclient(){
    $datosclient = "SELECT * FROM registrocliente";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$datosclient);
        while($fila = $ejecucion->fetch_assoc()) /*mientras existan filas*/ 
            {
                //Result.fetch_assoc();
                $this->datoscliente[]=$fila; /*Corchetes vacios[]: guardar en 1ra posicion disponible */
                /*almacenar cada fila de tabla en array vacio
                pro[0]=(fila 1 de la consulta)
                pro[1]=(fila 2 de la consulta)
                     ...
                */ 
            }

            //devolver productos
            return $this->datoscliente;
    }
}
?>