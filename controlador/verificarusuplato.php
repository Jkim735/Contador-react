<?php
$ci=$_POST['usu'];
$fechaen=$_POST['feen'];
$horaen=$_POST['hoen'];
$cantidadpla=$_POST['capla'];
$telefono=$_POST['tel'];
$destino=$_POST['destino'];
$plato=$_POST['plato'];
$conviertoamayuscula = strtoupper($plato);
require_once ("../modelo/loginadmin.php");
$intaciasingletonusuplato1=Admin::getInstance()->verificausuplato($ci,$conviertoamayuscula);
if($intaciasingletonusuplato1==1){
    require_once ("../modelo/ingresapedido.php");
    $intaciasingletonregistro=Pedidos::getInstance()->registrapedido($fechaen,$horaen,$cantidadpla,$telefono,$destino,$conviertoamayuscula,$ci);
    if($intaciasingletonregistro){
        echo "<script>alert('PEDIDO REALIZADO CON EXITO, GRACIAS POR SU RESERVA ".$ci." NOS COMUNICAREMOS CONTIGO LOS MAS PRONTO POSIBLE Y TU PEDIDO SERA ENVIADO A ".$destino." CON FECHA ".$fechaen." A HORAS ".$horaen."');
        window.location='../index.php';
        </script>";
    }else{
        echo "<script>alert('ERROR');
        window.location='../vista/reservasusuario.html';
        </script>";
    }
}else{
    echo "<script>alert('DATOS ERRONEOS');
    window.location='../vista/reservasusuario.html';
    </script>";
    
}
?>