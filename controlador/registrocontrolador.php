<?php
$ci=$_POST['ci'];
$nombre=$_POST['nom'];
$apa=$_POST['apa'];
$ama=$_POST['ama'];
$edad=$_POST['edad'];
$email=$_POST['email'];
$contraseña=$_POST['contra'];
$telefono=$_POST['tele'];
$direccion=$_POST['dire'];
require_once ("../modelo/registrousumodelo.php");
$intaciasingletonregistro=Usuarios::getInstance()->ingresausuarios($ci,$nombre,$apa,$ama,$edad,$email,$contraseña,$telefono,$direccion);
if($intaciasingletonregistro){
    echo "<script>alert('USUARIO REGISTRADO EXITOSAMENTE');
    window.location='../index.php';
    </script>";
    // echo "<script>alert('datos registrados');</script>";
}else{
    echo "<script>alert('error');</script>";
}
?>