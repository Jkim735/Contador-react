<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/editaplato.css">
    <title>PLATO A EDITAR</title>
</head>
<body>
    <?php
        require_once ("../config/conexion.php");
        $nomplato=$_GET['nombreplatito'];
        $consultabd="SELECT * FROM platos WHERE nombreplato='$nomplato'";
        $ejecucion =mysqli_query((Conectar::getInstance()->conexion()),$consultabd);
        while($filasbd=mysqli_fetch_assoc($ejecucion))
        {
?>
<div>
<form action="../controlador/editarplatocontro.php" method="POST" enctype="multipart/form-data">
        <h1>EDITAR UN PLATO</h1>
        <label for="">NOMBRE DEL PLATO : <input type="text" name="nompla" value="<?php echo $filasbd['nombreplato']?>"></label>
        <label for="">PRECIO DEL PLATO : <input type="text" name="pre" value="<?php echo $filasbd['precio']?>"> Bs.</label>
        <label for="">DESCRIPCION DEL PLATO : <input type="text" name="descri" value="<?php echo $filasbd['descripcion']?>"></label>
        <label for=""><input type="file" name="img" value="<?php echo $filasbd['imgplato']?>" required></label>
        <input type="submit" value="ACTUALIZAR">
    </form>
    <a href="cargar_datosbd.php">CANCELAR</a>
    <?php
        }
?>
</div>
</body>
</html>