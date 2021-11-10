<?php
        require_once ("../config/conexion.php");
        $nombre=$_POST['nompla'];
        $pre=$_POST['pre'];
        $descri=$_POST['descri'];
    $fotoplato=$_FILES['img']['name'];/*en esta linea agarramos a la foto y elnombre de la foto */
    $ruta=$_FILES['img']['tmp_name'];/*agarrando la ruta de la pc de la foto */
    $destino="../vista/fonts/".$fotoplato;/*guardando la foto en la carpeta fotos */
    copy($ruta,$destino);/*copiando la foto de la ruta de donde se saco hacia donde queremos copearla*/
    require_once ("../modelo/editarplatomodelo.php");
    $intaciasingletoneditplato=Editarplatomodelo::getInstance()->editarpla($nombre,$pre,$descri,$destino);
    if($intaciasingletoneditplato==1){
        echo "<script>alert('PLATO EDITADO CON EXITO');
        window.location='../vista/cargar_datosbd.php';
        </script>";
    }else{
        echo "<script>alert('ERROR');</script>";
    }
?>