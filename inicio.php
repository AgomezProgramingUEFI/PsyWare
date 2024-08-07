<!--  -->
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
   <link rel="stylesheet" href="Css-Inicio/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="Css-Inicio/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="Css-Inicio/responsive.css">
   <!-- fevicon -->
   <link rel="stylesheet" href="Css-Inicio/estilos2.css">

   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="Css-Inicio/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" ></div>
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
             
                   <style>

                       @media (max-width: 768px) {
                           .navbar-nav .nav-link {
                               margin-top: 0;
                               margin-right: 0;
                           }
                           .hamburger-menu {
                               display: flex;
                               justify-content: center;
                               align-items: center;
                               width: 100%;
                               cursor: pointer;
                               padding: 10px;
                               font-size: 24px;
                           }
                           .navbar-collapse {
                               display: none;
                               background-color: #F8F4E4;
                           }
                           .navbar-collapse.show {
                               display: block;
                               text-align: center;
                               background-color: #F8F4E4;
                           }
                           .navbar-nav {
                               flex-direction: column;
                               background-color: #F8F4E4;
                           }
                       }
                       .navbar-nav {
                           margin: 0 auto;
                           background-color: #F8F4E4;
                       }
                   </style>
               </head>
               <body>
                   <div class="col-md-10 offset-md-1" >
                       <nav class="navbar navbar-expand-md navbar-light bg-light" style="background-color: #F8F4E4;">
                           <div class="hamburger-menu d-md-none" onclick="toggleMenu()">
                               &#9776; <!-- Icono de hamburguesa -->
                           </div>
                           <div class="collapse navbar-collapse show d-md-block" id="navbarNav" style=" background-color: #F8F4E4;">
                               <ul class="navbar-nav" >
                                   <li class="nav-item" style="background-color: #F8F4E4;">
                                       <a id="inicio" class="nav-link" href="inicio.php">Inicio</a>
                                   </li>
                                   <li class="nav-item" style="background-color: #F8F4E4;">
                                       <a id="nosotros" class="nav-link" href="nosotros1.php">Nosotros</a>
                                   </li>
                                   <li class="nav-item" style="background-color: #F8F4E4;">
                                       <a id="servicios" class="nav-link" href="servicios.php">Servicios</a>
                                       <ul class="menu-vertical">
                                           <li><a href="./servicios.php" style="background-color: #F8F4E4;">para ti</a></li>
                                           <li><a href="./galeria.php" style="background-color: #F8F4E4;">galeria</a></li>
                                       </ul>
                                   </li>
                                   <li class="nav-item">
                                       <a id="contacto" class="nav-link" href="contacto.php" style="background-color: #F8F4E4;">Contáctenos</a>
                                   </li>
                                   <li class="nav-item">
                                       <a id="login" class="nav-link" href="login.php" style="background-color: #F8F4E4;">Iniciar sesión</a>
                                   </li>
                               </ul>
                           </div>
                       </nav>
                   </div>
               
                   <script>
                       function toggleMenu() {
                           var menu = document.getElementById('navbarNav');
                           menu.classList.toggle('show');
                       }
                   </script>
               
                
               
               
    
               <div class="logo">
                  <a href="index.php"><img
                        src="images/Captura_de_pantalla_2024-05-07_000011-removebg-preview.png" width="200px"
                        alt="#" /></a>
               </div>
    
            </header>
    
  
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script> -->

   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption relative">
                     <div class="row">
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Asesoría <br> psicológica</h1>
                              <br>
                              <span>Modalidad de acompañamiento psicológico que te ofrece un apoyo en desarrollar
                                 habilidades para que gestiones tus emociones y enfrentes los desafíos cotidianos que
                                 impactan tu salud mental.</span>
                              <a class="read_more" href="login.php">leer más</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption relative">
                     <div class="row">
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Descubre <br>tu bienestar</h1>
                              <br>
                              <span> <span>Realiza nuestro test para identificar posibles trastornos mentales y obtén
                                    orientación personalizada. Únete a nuestra comunidad para conectarte con expertos y
                                    encontrar apoyo.</span></span>
                              <a class="read_more" href="login.php">Leer más</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption relative">
                     <div class="row">
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Agenda <br>tu cita</h1>
                              <br>
                              <span>Reserva tu consulta con nosotros y disfruta de horarios flexibles que se adaptan a
                                 tu vida ocupada. Tu bienestar es nuestra prioridad.</span>
                              <a class="read_more" href="login.php">Leer</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage" id="QuienesSomos">
                  <h2>¿Quiénes <span class="green">somos?</span></h2>
                  <p>En Psyware, somos un equipo apasionado de profesionales comprometidos con tu bienestar emocional.
                     Nuestra misión es brindarte acceso fácil y confiable a psicólogos altamente calificados, así como a
                     recursos y herramientas útiles para mejorar tu salud mental.</p>
                  <a class="read_more" href="login.php"> Leer más</a>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/psicologa3.jpeg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!--  service -->
   <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage" id="NuestrosServicios">
                  <h2>Nuestros <span class="green">Servicios</span></h2>
               </div>
            </div>
         </div>
         <div class="container-padre">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="row">
                        <div class="col-md-4 col-sm-6">
                           <div class="service_box">
                              <div class="item">
                                 <i style="margin-left:190px;"><img src="images/service1.png" alt="#" /></i>
                                 <h3 style="margin-left:190px;">Test</h3>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-4 offset-md-1 col-sm-6">
                           <div class="service_box">
                              <div class="item1">
                                 <i style="margin-left: 80px;"></i>><img src="images/service2.png" alt="#" /></i>
                                 <h3 style="margin-left: 80px;">Atención <br>psicologica</h3>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                           <div class="service_box">
                              <div class="item2">
                                 <i style="margin-left: 60px;"><img
                                       src="images/AAl_escuchar_consciente-removebg-preview.png" alt="#" /></i>
                                 <h3 style="margin-left: 90px;">Foro</h3>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                           <div class="service_box">
                              <div class="item3">
                                 <i style="margin-left: 50px;"><img src="images/service4.png" alt="#" /></i>
                                 <h3 style="margin-left: 50px;">Agendar cita</h3>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="login.php">Leer más </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- end service -->
   <!-- design -->
   <div class="design">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-5">
               <div id="design" class="carousel slide banner_design" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#design" data-slide-to="0" class="active"></li>
                     <li data-target="#design" data-slide-to="1"></li>
                     <li data-target="#design" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2>¿Por qué <span class="green">nosotros?</span></h2>
                                       </div>
                                       <p>En Psyware Encuentra ayuda confidencial y especializada para tus trastornos
                                          mentales. Ofrecemos información, comunicación directa con psicólogos, citas
                                          presenciales y herramientas de autoayuda. ¡Cuida tu bienestar mental con
                                          nosotros!</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2>Descubre la <span class="green">innovación</span></h2>
                                       </div>
                                       <p>Acceso instantáneo a psicólogos, citas presenciales flexibles y una comunidad
                                          de apoyo en un solo lugar. Únete a nosotros y experimenta una forma única de
                                          cuidar tu bienestar mental.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2>Rompiendo <span class="green">estigmas</span></h2>
                                       </div>
                                       <p>¿Alguna vez te has sentido deprimido y te da demasiada vergüenza decirlo?
                                          Únete a la familia de PsyWare, donde encontrarás orientación y apoyo sobre
                                          estos temas. En PsyWare, creemos en romper el estigma y ofrecer un espacio
                                          seguro para hablar sobre la salud mental. </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#design" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#design" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Siguiente</span>
                  </a>
               </div>
            </div>
            <div class="col-md-7 pad_roght0">
               <div class="design_img">
                  <figure><img src="images/sigue.jpeg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end design -->
   <!-- testimonial -->
   <div id="testimonial" class="Testimonial">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-8 pad_left0">
               <div id="testimon" class="carousel slide banner_testimonial" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#testimon" data-slide-to="0" class="active"></li>
                     <li data-target="#testimon" data-slide-to="1"></li>
                     <li data-target="#testimon" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/josue12.png" alt="#" /></i>
                                       <span>Josue Vazquez</span>
                                       <p>¡Increíble experiencia! Gracias a este sitio web, pude identificar mis
                                          preocupaciones y obtener ayuda profesional con horarios flexibles.
                                          Definitivamente merece 5 estrellas.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/sara12.png" alt="#" /></i>
                                       <span>Sara Montes</span>
                                       <p>Este sitio web con horarios flexibles fue un salvavidas para mí. Me sentí
                                          comprendida y apoyada desde el primer momento. Una experiencia maravillosa que
                                          recomendaría a cualquier mujer que necesite apoyo emocional.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/martin12.png" alt="#" /></i>
                                       <span>Martin Silva</span>
                                       <p>Excelente atención y apoyo recibido aquí. El equipo fue amable y profesional,
                                          brindando herramientas útiles para manejar mis preocupaciones. Definitivamente
                                          lo recomendaría a otros adultos mayores</p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/johana12.png" alt="#" /></i>
                                       <span>Johana Moreno</span>
                                       <p>Quiero expresar mi profunda gratitud por el apoyo que mi hijo recibió aquí. El
                                          equipo fue excepcional y brindó una atención cálida y comprensiva. Estamos muy
                                          agradecidos por su dedicación</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/jonatan mora12.png" alt="#" /></i>
                                       <span>Jhonatan Mora</span>
                                       <p>Experimenté un servicio excepcional en este sitio web. El equipo fue muy
                                          profesional y comprensivo. Recibí herramientas útiles para abordar mis
                                          preocupaciones. Lo recomendaría sin dudarlo.</p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/Hanna12.png" alt="#" /></i>
                                       <span>Hanna López</span>
                                       <p>Mi experiencia en este sitio web fue fantástica. El equipo fue muy atento y
                                          comprensivo, brindándome el apoyo que necesitaba. Definitivamente volveré y lo
                                          recomendaré a otros.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#testimon" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#testimon" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Siguiente</span>
                  </a>
               </div>
            </div>
            <div class="col-md-4 ">
               <div class="titlepage">
                  <h2>Testimonios</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end design -->
   <!--  contact -->
   <div id="contact" class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Contáctanos</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <form id="request" class="main_form">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Nombre" type="type" name="Name">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Gmail" type="type" name="Email">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Número Telefónico" type="type" name="Phone Number">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Mensaje</textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">Siguiente</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map_main">
                  <div class="map-responsive">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7609688028124!2d-75.53861255000001!3d6.2951117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f51e61b5b77%3A0x8a36a548b519b89b!2sLa%20Avanzada%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1711665184595!5m2!1ses!2sco"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>  <br>  <br>
   <!-- end contact -->
   <!--  footer -->
   <footer>
      <div class="footer" style="background-color: #F8F2D6 ;color:black;">
         <div class="container">
            <div class=" row">
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
   <script src="Scripts-Inicio/jquery.min.js"></script>
   <script src="Scripts-Inicio/bootstrap.bundle.min.js"></script>
   <script src="Scripts-Inicio/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="Scripts-Inicio/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="Scripts-Inicio/custom.js"></script>
   <script src="Scripts-Inicio/loading.js"></script>
</body>

</html>