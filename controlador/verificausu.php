<?php
$ci=$_POST['usu'];
$contra=$_POST['contra'];
require_once ("../modelo/loginadmin.php");
$intaciasingletonregistro=Admin::getInstance()->verificausu($ci,$contra);
if($intaciasingletonregistro==1){
    echo "<script>alert('BIENVENIDO  A LAS RESERVAS');
    window.location='../vista/reservasusuario.html';
    </script>";
}else{
    echo "<script>alert('DATOS ERRONEOS');
    window.location='../vista/loogin_usuario.html';
    </script>";
    
}
?>