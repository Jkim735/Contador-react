<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./styles/adminplatos.css">
    <title>REGISTRAR PLATOS</title>
</head>
<body>
    <header>
        <span class="nav-bar" id="btn-menu"><i class="fas fa-bars"></i></span><!--el i es el icono de amburgesa-->
            <nav class="main-nav">
                <ul class="menu" id="menu">
                    <img src="./imgs/logo.png" alt="logo restaurant" width="250">
                    <li class="menu-item"><a href="../index.php" class="menu-link color">Home</a></li>
                    <li class="menu-item"><a href=" ../index.php #nosotros" class="menu-link">Nosotros</a></li>
                    <li class="menu-item"><a href="loogin_usuario.html" class="menu-link">Realizar Pedido</a></li>
                    <li class="menu-item"><a href="../index.php" class="menu-link">Registrarse</a></li>
                    <li class="menu-item"><a href="cargar_datosbd.php" class="menu-link">Admin</a></li>
                </ul>
            </nav>
        </header>
        <div>
            <form action="../controlador/adminplatos.php" method="POST" enctype="multipart/form-data">
                <h1>REGISTRO ALGUN PLATILLO</h1>
                <label for=""><input type="number" placeholder="CEDULA DE IDENTIDAD ADMIN" required name="ci"></label>
                <label for=""><input type="text" placeholder="NOMBRE DEL PLATO" required name="nombreplato"></label>
                <label for=""><input type="number" placeholder="PRECIO" required name="precio">Bs.</label>
                <label for=""><input type="text" placeholder="DESCRIPCION DEL PLATO" required name="descripcion"></label>
                <label for=""><input type="file" placeholder="IMAGEN DEL PLATO" required name="imgplato" value="SELECCIONAR FOTO"></label>
                <input type="submit" value="REGISTRAR PLATO">
            </form>
        </div>
        <hr>
        <h1>LISTA DE PLATILLOS DOMINGO SAVIO</h1>
        <center>
        <table>
            <thead >
            <tr>
                <th>NOMBRE DEL PLATO</th>
                <th>PRECIO</th>
                <th>DESCRIPCION</th>
                <th>PLATO</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
            </tr>
            </thead>
        <tbody>
        <?php
        require_once ("../modelo/datosplatosadmin.php");    
        $mostrardatosbd=Datosplatos::getInstance()->sacardatosplato();
        foreach($mostrardatosbd as $datitos) /*$produc se crea dentro del foreach */
        {
            echo "
         <tr>
                    <td>".$datitos['nombreplato']."</td>
                    <td>".$datitos['precio']." Bs.</td>
                    <td>".$datitos['descripcion']."</td>
                    <td><img src='".$datitos['imgplato']."' alt='platos del restaurant' width='100px'></td>
                    <td class='hovertd'><a href='editarplato.php?nombreplatito=".$datitos['nombreplato']."'>EDITAR</a></td>
                    <td class='hovertd'><a href='../controlador/eliminarplato.php?platito=".$datitos['nombreplato']."'>ELIMINAR</a></td>
            </tr>
            ";
        }
            ?>
        </tbody>
        </table>
        </center>
        <br>
        <hr>
        <h1>LISTA DE RESERVAS DE LOS CLIENTES</h1>
        <center>
        <table>
            <thead >
            <tr>
                <th>ID RESERVA</th>
                <th>NOMBRE CLIENTE</th>
                <th>APELLIDOS CLIENTE</th>
                <th>FECHA DE ENTREGA</th>
                <th>HORA DE ENTREGA</th>
                <th>CANTIDAD DE PLATOS</th>
                <th>PLATO</th>
                <th>TELEFONO CLIENTE</th>
                <th>DIRECCION DE LA ENTREGA</th>
            </tr>
            </thead>
        <tbody>
        <?php
        require_once ("../modelo/datosreservaadmin.php");    
        $mostrardatosreservas=DatosReservas::getInstance()->sacardatosreservas();
        foreach($mostrardatosreservas as $rese) /*$produc se crea dentro del foreach */
        {
            echo "
         <tr>
                    <td>".$rese['id_reserva']."</td>
                    <td>".$rese['nombres']."</td>
                    <td>".$rese['apaterno']." ".$rese['amaterno']."</td>
                    <td>".$rese['fecha_entrega']."</td>
                    <td>".$rese['hora_entrega']."</td>
                    <td>".$rese['cantidad_platos']." Platos</td>
                    <td>".$rese['plato']."</td>
                    <td>".$rese['telefono_referecia']."</td>
                    <td>".$rese['destino_direccion']."</td>
            </tr>
            ";
        }
            ?>
        </tbody>
        </table>
        </center>


        <br>
        <hr>
        <h1>LISTA DE CLIENTES REGISTRADOS</h1>
        <center>
        <table>
            <thead >
            <tr>
                <th>CEDULA DE IDENTIDAD</th>
                <th>NOMBRE CLIENTE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th>EDAD</th>
                <th>CORREO</th>
                <th>TELEFONO</th>
                <th>DIRECCION</th>
            </tr>
            </thead>
        <tbody>
        <?php
        require_once ("../modelo/datosclient.php");    
        $mostrardatosclient=DatosClient::getInstance()->sacardatosclient();
        foreach($mostrardatosclient as $client) /*$produc se crea dentro del foreach */
        {
            echo "
         <tr>
                    <td>".$client['ci_cliente']."</td>
                    <td>".$client['nombres']."</td>
                    <td>".$client['apaterno']."</td>
                    <td>".$client['amaterno']."</td>
                    <td>".$client['edad']."</td>
                    <td>".$client['correo']." Platos</td>
                    <td>".$client['telefono']."</td>
                    <td>".$client['direccion']."</td>
            </tr>
            ";
        }
            ?>
        </tbody>
        </table>
        </center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <script src="./scripts/loginadmin.js"></script>
</body>
</html>