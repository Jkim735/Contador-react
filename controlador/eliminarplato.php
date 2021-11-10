<?php
$nombrepla=$_GET['platito'];
require_once ("../modelo/eliminapla.php");
    $intaciasingletondeleteplato=Eliminaplatomodelo::getInstance()->eliminapla($nombrepla);
    if($intaciasingletondeleteplato==1){
        echo "<script>alert('PLATO PLATO ELIMINADO');
        window.location='../vista/cargar_datosbd.php';
        </script>";
    }else{
        echo "<script>alert('ERROR');
        window.location='../vista/cargar_datosbd.php';
        </script>";
    }
?>