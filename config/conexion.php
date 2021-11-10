<?php
    class Conectar
    {
            // Contenedor instancia de la clase
    private static $instance = NULL;
   
    // Constructor privado, previene la creación de objetos vía new
    private function __construct() { }

    // Clone no permitido
    private function __clone() { }

    // Método singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Conectar();
        }
        return self::$instance;
    }
        public static function conexion()
        {
            $conexion = mysqli_connect("localhost", "root", "", "restaurantdm");
                    //  if($conexion){
                    //      echo "<script>alert('bien');</script>";
                    //  }else{
                    //     echo "<script>alert('mal');</script>";
                    //  }
            return $conexion;
        }
    }
    // $va=new Conectar();
    // $va->conexion();
    ?>