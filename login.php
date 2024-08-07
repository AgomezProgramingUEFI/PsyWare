<?php

require 'funciones.php';

if(isset($_SESSION['id'])) {
   header('Location:index.php');
}


$iniciosesion  = new Inicio_sesion();

if (isset($_POST['submit'])) {
  $result = $iniciosesion ->InicioSesion(

$_POST['nameUser_email'],
$_POST['clue'],

  );


  if ($result == 1) {
   $_SESSION['iniciosesion'] = true;
   $_SESSION['id'] = $iniciosesion->IdUsuario();

   header('location:index.php');
  }


  else if ($result == 10) {
 
echo "<script>Alert('contraseña incorrecta ')</script>";

  }
  else if ($result == 100 ) {
   echo "<script>Alert('Usuario no registrado ')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>PsyWare</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="Css-Login/login.css">

   <link rel="stylesheet" href="Css-Login/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="Css-Login/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="Css-Login/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="Css-Login/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->


<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#"></div>
   </div>
   <!-- end loader -->
   <!-- header -->

   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                     </div>
                  </div>
               </div>

               <div class="col-md-10 offset-md-1">
                  <nav class="navigation navbar navbar-expand-md">
                     <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="menu-horizontal navbar-nav">



                           <li class="nav-item">
                              <a style="margin-top: -60px;  margin-right: 20px;" class="nav-link"
                                 href="./inicio.php">Inicio</a>

                           </li>

                           <li class="nav-item">
                              <a style="margin-top: -60px;  margin-right: 20px;" class="nav-link"
                                 href="nosotros1.php">Nosotros</a>

                           </li>
                           <li class="nav-item">
                              <a style="margin-top: -60px;  margin-right: 20px;" class="nav-link" href="servicios.php">
                                 Servicios </a>
                              <ul class="menu-vertical">

                                 <li><a href="./servicios.php">para ti
                                    </a></li>
                                 <li><a href="./galeria.php">galeria</a></li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a style="margin-top: -60px;  margin-right: 20px;" class="nav-link"
                                 href="contacto.php">Contáctenos</a>

                           </li>
                           <li class="nav-item">
                              <a style="margin-top: -60px;  margin-right: 20px;" class="nav-link"
                                 href="login.php">Iniciar sesión</a>

                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>

               <div class="logo">
                  <a href="index.php"><img src="images/Captura_de_pantalla_2024-05-07_000011-removebg-preview.png"
                        width="200px" alt="#" /></a>
               </div>

   </header>

   <main>

      <div class="contenedor__todo">
         <div class="caja__trasera">
            <div class="caja__trasera-login">
               <h3>¿Ya tienes una cuenta?</h3>
               <p>Inicia sesión para entrar en la página</p>
               <button id="btn__iniciar-sesion" name="submit" type="submit">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-register">
               <h3>¿Aún no tienes una cuenta?</h3>
               <p>Regístrate para que puedas iniciar sesión</p>
               <button id="btn__registrarse">Regístrarse</button>
            </div>
         </div>

         <!--Formulario de Login y registro-->
         <div class="contenedor__login-register">
            <!--Login-->
            <form action="index.php" method="post" class="formulario__login">
               <h2>Iniciar Sesión</h2>
               <input type="text" placeholder="Nombre de Usuario" name="nameUser_email" required>
               <input type="password" placeholder="Contraseña" name="clue" required>
               <button><a href="index.php">Entrar</a></button>
            </form>

            <!--Register-->
            <form action="registro.php" method="post" class="formulario__register">
               <h2>Regístrarse</h2>
               <input type="text" placeholder="Nombre de usuario" name="nombreUsuario" required>
               <input type="text" placeholder="Nombre Completo" name="nombreCompleto" required>
               <input type="email" placeholder="Correo Electronico" name="correoElectronico" required>
               <input type="password" placeholder="Contraseña" name="contraseña" required>
               <input type="password" placeholder="Repetir Contraseña" name="confirmContraseña" required>
               <button><a href="index.php">Regístrarse</a></button>
            </form>
         </div>
      </div>
   </main>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <!--  footer -->




   <footer>
      <div class="footer" style="background-color: #F8F2D6 ;color:black;">
         <div class="container">
            <div class="row">
               <div class=" col-md-3 col-sm-6">
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                  <p style="color: black;" class="variat pad_roght2">¡No te pierdas ni un detalle de nuestro sitio web!
                     Síguenos en nuestras redes sociales para mantenerte al tanto de todas las novedades y sorpresas que
                     tenemos preparadas para ti.
                  </p>
               </div>
               <div class=" col-md-3 col-sm-6">
                  <h3 style="color: black;">Servicios </h3>
                  <p style="color: black;" class="variat pad_roght2">


                     Conecta con un profesional escribiéndole directamente.

                     Únete a nuestro foro virtual

                     Encuentra información

                     Conoce nuestras líneas de ayuda

                  </p>
               </div>
               <div class="col-md-3 col-sm-6">
                  <h3 style="color: black;">información</h3>
                  <ul class="link_menu">
                     <li><a style="color: black;" href="index.php">Inicio</a></li>
                     <li><a style="color: black;" href="about.html"> Regístrate</a></li>
                     <li><a style="color: black;" href="service.html">Servicios</a></li>
                     <li><a style="color: black;" href="gallery.html">Galeria</a></li>
                     <li><a style="color: black;" href="testimonial.html">Testimonios</a></li>
                     <li><a style="color: black;" href="contact.html">Contátenos</a></li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6">
                  <h3 style="color: black;">Nuestro Equipo</h3>
                  <p style="color: black;" class="variat">
                     Psicologa Martha Botero.
                     Psicologo Oscar Oquendo.
                     Psicologa Natalia Marín.
                  </p>
               </div>
               <div class="col-md-6 offset-md-6">
                  <form id="hkh" class="bottom_form">
                     <input style="color: black;" class="enter" placeholder="Escribe tu correo: " type="text"
                        name="Enter your email">
                     <button style="color: black;" class="sub_btn">Contáctanos</button>
                  </form>
               </div>
            </div>
         </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->

   <!-- end footer -->
   <!-- Javascript files-->
   <script src="Scripts-Login/jquery.min.js"></script>
   <script src="Scripts-Login/bootstrap.bundle.min.js"></script>
   <script src="Scripts-Login/jquery-3.0.0.min.js"></script>
   <script src="Scripts-Login/script.js"></script>
   <script src="js/register.js"></script>
   <script src="Scripts-Login/login.js"></script>
   <!-- sidebar -->
   <script src="Scripts-Login/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="Scripts-Login/custom.js"></script>
</body>

</html>