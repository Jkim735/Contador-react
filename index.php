<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="vista/styles/style.css">
    <title>Document</title>
</head>
<body>
    <!-- <header>
        <nav>
            <img src="vista/imgs/logo.png" alt="logo restaurant">
            <div class="links">
                <a href="#">HOME&and;</a>
                <a href="#">NOSOTROS&and;</a>
                <a href="#">SUCURSALES&and;</a>
                <a href="#">PEDIDO&and;</a>
                <button href="#">REGISTRARSE</button>
            </div>
        </nav>
    </header> -->


<header>
    <span class="nav-bar" id="btn-menu"><i class="fas fa-bars"></i></span><!--el i es el icono de amburgesa-->
        <nav class="main-nav">
            <ul class="menu" id="menu">
                <img src="vista/imgs/logo.png" alt="logo restaurant" width="250">
                <li class="menu-item"><a href="#home" class="menu-link color">Home</a></li>
                <li class="menu-item"><a href="#nosotros" class="menu-link">Nosotros</a></li>
                <li class="menu-item"><a href="./vista/loogin_usuario.html" class="menu-link">Realizar Pedido</a></li>
                <li class="menu-item"><a href="#registro" class="menu-link">Registrarse</a></li>
                <li class="menu-item"><a href="./vista/loginadmin.html" class="menu-link">Admin</a></li>
            </ul>
        </nav>
    </header>


    <article>
        <h2>RESTAURANT DOMINGO SAVIO TE BRINDAS LOS MEJORES PLATILLOS Y A LOS MEJORES PRECISIOS. <br> REALIZA TU PEDIDO YA!!!</h2>
    </article>


    <article class="home" id="home">
        <h3>HOME</h3>
        <p>Nuestra gastronomía es uno de los atractivos más importantes. La propuesta de nuestros restaurantes tienen elementos que dan vida a nuestros rasgos ancestrales y se encuentran con nuestra pujante modernidad. Nuestros ingredientes hacen que cada emprendimiento tenga elementos auténticos. Es por eso que en La Paz tendrás momentos inolvidables, que son parte de un ecosistema que no deja de sorprender ni crecer.</p>
    </article>
    <article class="nosotros" id="nosotros">
        <h3>NOSOTROS</h3>
        <p>Una experiencia gastronómica excepcional le espera en Casa Grande Hotel. Con el restaurante Yerba Buena, Casabar y Puro Gelato & Caffe, nuestros huéspedes pueden disfrutar de una experiencia memorable a la par con los mejores restaurantes de La Paz. Nuestra filosofía culinaria se centra alrededor de tres principios básicos: los ingredientes de temporada más frescos; Cálido servicio; y una ambientación relajada pero sofisticada a la vez.</p>
    </article>

    
<article>
    <h1>CONOCE NUESTROS PLATOS</h1>
    <?php
    require_once ("./modelo/sacardatos.php");    
    $mostrardatosbd=SacarDatos::getInstance()->sacardatosbd();
    foreach($mostrardatosbd as $datitos) /*$produc se crea dentro del foreach */
    {
        echo "
        <div class='plato'>
            <div>
            <img src='./vista/".$datitos['imgplato']."' alt='platos del restaurant'>
            </div>
            <div>
            <h2>".$datitos['nombreplato']."</h2>
            <p>".$datitos['descripcion']."</p>
            <h5>Propietario</h5>
            <p>".$datitos['nombres']." ".$datitos['apaterno']." ".$datitos['amaterno']."</p>
            <h5>Correo</h5>
            <p>".$datitos['correo']."</p>
            <h5>Telefono de Referencia  del Propietario</h5>
            <p> ".$datitos['telefono']."</p>
            </div>
            <span>".$datitos['precio']." Bs.</span>
        </div>";      
    }
?>
</article>
    <!-- <div class="plato">
        <div>
        <img src="https://mirecetadehoy.com/wp-content/uploads/2020/07/chicharron-de-chancho_680x454-1-680x454.jpg" alt="Chicharron">
        </div>
        <div>
        <h2>CHICHARRONCITO</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, minus earum neque harum enim nisi vel reiciendis accusamus sunt debitis mollitia quam voluptate. Quidem recusandae libero fugit animi saepe illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat temporibus magni repellendus nisi doloribus! Quisquam molestias delectus recusandae dolores maiores excepturi, tempore cumque ipsam asperiores eius ipsum libero hic. Tempora.</p>
        <h5>Propietario</h5>
        <P>jhimy</P>
        <h5>Correo</h5>
        <p>jhim@gmail.com</p>
        <h5>Telefono de referencia</h5>
        <p>73548703</p>
        </div>
        <span>10 pesitos</span>
    </div> -->
<article class="registros" id="registro">
    <div class="registro">
        <div>
        <p>Registrate y reserva tu pedido YA!!!</p>
        <img src="vista/imgs/DKdt42i_HJI.png" alt="logito">
        </div>
        <form action="controlador/registrocontrolador.php" method="post">
            <h3>REGISTRO DE CLIENTES</h3>
            <h4>Registrate y realiza tu pedido de tu plato favorito</h4>
            <label for="#"><input type="number" placeholder="CEDULA DE IDENTIDAD" required name="ci"></label><br>
            <label for="#"><input type="text" placeholder="NOMBRES" required name="nom"></label><br>
            <label for="#"><input type="text" placeholder="APELLIDO PATERNO" required name="apa"></label><br>
            <label for="#"><input type="text" placeholder="APELLIDO MATERNO" required name="ama"></label><br>
            <label for="#"><input type="number" placeholder="EDAD" required name="edad"></label><br>
            <label for="#"><input type="email" placeholder="E-MAIL" required name="email"></label><br>
            <label for="#"><input type="password" placeholder="CONTRASEÑA" required name="contra"></label><br>
            <label for="#"><input type="number" placeholder="TELEFONO" required name="tele"></label><br>
            <label for="#"><input type="text" placeholder="DIRECCION" required name="dire"></label>
            <br>
            <input type="submit" value="REGISTRARSE">
        </form>
    </div>
</article>

<footer>
        <div id="footer_contacto">
            <p>
                Teléfono: +591 73548703
            </p>
            <p>
                Email: jhimy@gmail.com
            </p>
            <p>
                Web: jhimy.com
            </p>           
        </div>
        <div id="footer_social">
            
            <a href="#" target="_blank">
                <img src="vista/imgs/social/facebook.png" alt="Facebook" width="40px">
            </a>
            <a href="#">
                <img src="vista/imgs/social/whatsapp.png" alt="WhatsApp" width="40px">
            </a>
            <a href="#">
                <img src="vista/imgs/social/youtube.png" alt="Youtube" width="40px">
            </a>
        </div>
        <p>Jkim - Todos los Derechos Reservados</p>
    </footer>


    <script src="vista/scripts/indexscrit.js"></script>
</body>
</html>