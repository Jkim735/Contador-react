<?php
$ci=$_POST['usu'];
$contra=$_POST['contra'];
require_once ("../modelo/loginadmin.php");
$intaciasingletonregistro=Admin::getInstance()->verificaadmin($ci,$contra);
if($intaciasingletonregistro==1){
    echo "<script>alert('BIENVENIDO ADMINISTRADOR');
    window.location='../vista/cargar_datosbd.php';
    </script>";
}else{
    echo "<script>alert('DATOS ERRONEOS');
    window.location='../vista/loginadmin.html';
    </script>";
}
?>