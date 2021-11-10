<?php
require_once ("../modelo/registrarplato.php");
$ci=$_POST['ci'];
$nombreplato=$_POST['nombreplato'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
    /*importante que tiene que ser por el metodo FILES YA QUE SON ARCHIVOS*/
    $fotoplato=$_FILES['imgplato']['name'];/*en esta linea agarramos a la foto y elnombre de la foto */
    $ruta=$_FILES['imgplato']['tmp_name'];/*agarrando la ruta de la pc de la foto */
    $destino="../vista/fonts/".$fotoplato;/*guardando la foto en la carpeta fotos */
    copy($ruta,$destino);/*copiando la foto de la ruta de donde se saco hacia donde queremos copearla*/
    $mandarregistro=RegistraPlatos::getInstance()->registraplatos($ci,$nombreplato,$precio,$descripcion,$destino);
    if($mandarregistro){
        echo "<script>alert('PLATO REGISTRADO CON EXITO');
        window.location='../index.php';
        </script>";
    }else{
        echo "<script>alert('error');
        window.location='../vista/cargar_datosbd.php';
        </script>";
    }
?>