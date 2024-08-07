<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="Usuario/Theme/Css-Test/styles.css">

    <!-- Bootstrap core CSS -->
    <link href="Usuario/Theme/Css-Test/bootstrap.css" rel="stylesheet">

    <!-- FontAweome CDN Link for Icons-->
    <link href="Usuario/Theme/Css-Test/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--external css-->
    <link href="Usuario/Theme/Css-Test/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="Usuario/Theme/Css-Test/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Footer JS-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="Usuario/Theme/Css-Test/style copy.css" rel="stylesheet">
    <link href="Usuario/Theme/Css-Test/style-responsive.css" rel="stylesheet">
    <title>PsyWare - sitio web</title>
</head>

<body>

    <section id="container">

        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b><img src="Usuario/Theme/Imagenes/logo psyware.png"></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">

            </div>
        </header>

        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="#"><img
                                style="height: 80px; width: 90px; margin-top: -40px;" src="Usuario/Theme/Imagenes/profile.png"
                                class="img-circle" width="60"></a></p>
                    <h5 class="centered">Marcel Newman</h5>

                    <li class="sub-menu">
                        <a class="active" href="index.php">
                            <i class="fas fa-home"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="informate.php">
                            <i class="fas fa-info-circle"></i>
                            <span>Informate</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="test.php">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <span>Test</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-brain" aria-hidden="true"></i>
                            <span>Atenciòn Psìcologica</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fas fa-comments"></i>
                            <span>Foro</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fas fa-calendar" aria-hidden="true"></i>
                            <span>Agendar Cita</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fas fa-spa" aria-hidden="true"></i>
                            <span>Relàjate</span>
                        </a>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>


        <section id="main-content">
            <section class="wrapper">

                <!-- botón de inicio de prueba -->

                <div class="start_btn"><button>Iniciar prueba</button>



                </div>

                <!-- Caja de Informacion-->
                <div class="info_box">
                    <div class="info-title"><span>Algunas reglas de este cuestionario</span></div>
                    <div class="info-list">
                        <div class="info">1. Tendrás solo <span> 20 segundos</span> por cada pregunta.</div>
                        <div class="info">2. Una vez que seleccione su respuesta, no se puede deshacer..</div>
                        <div class="info">3. No puede seleccionar ninguna opción una vez que se acaba el tiempo.</div>
                        <div class="info">4. No puedes salir del Quiz mientras estás jugando.</div>
                        <div class="info">5. Obtendrás puntos en base a tus respuestas correctas.</div>
                    </div>
                    <div class="buttons">
                        <button class="quit">Salir del Cuestionario</button>
                        <button class="restart">Continuar</button>
                    </div>

                </div>

                <!-- Cuadro de prueba-->
                <div class="quiz_box" style="margin-top: 50px;">
                    <header>
                        <div class="title">Cuestionario Salud Mental</div>
                        <div class="timer">
                            <div class="time_left_txt">Tiempo restante</div>
                            <div class="timer_sec">20</div>
                        </div>
                        <div class="time_line"></div>
                    </header>
                    <section>
                        <div class="que_text">
                            <!-- Aquí he insertado una pregunta de JavaScript -->
                        </div>
                        <div class="option_list">
                            <!-- Aquí he insertado opciones de JavaScript -->
                        </div>
                    </section>

                    <!-- pie de página de la prueba -->
                    <footer class="footer1">
                        <div class="total_que">
                            <!-- Aquí he insertado Número de conteo de preguntas de JavaScript -->
                        </div>
                        <button class="next_btn">Siguiente</button>
                    </footer>
                </div>

                <!-- Result Box -->
                <div class="result_box">
                    <div class="icon">

                        <img src="Usuario/Theme/Test/cerebro.jpeg" class="avatar" alt="">


                    </div>
                    <div class="complete_text" style="text-align: center;">¡Has completado el cuestionario!</div>
                    <div class="score_text">
                        <script>
                            showResult();
                        </script>
                        <!-- Aquí he insertado Score Result de JavaScript-->
                    </div>
                    <div class="buttons">
                        <button class="restart">Cuestionario de repetición</button>
                        <button class="quit">Salir </button>
                    </div>
                </div>


                <footer style="margin-top: 100%;">
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <ul class="social_icon">
                                        <li><a href="https://www.facebook.com/tu_pagina" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="fab fa-facebook"></i>
                                            </a></li>
                                        <li><a href="https://twitter.com/tu_cuenta" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="fab fa-twitter"></i>
                                            </a></li>
                                        <li><a href="https://www.linkedin.com/in/tu_perfil" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="fab fa-linkedin"></i>
                                            </a></li>
                                        <li><a href="https://www.instagram.com/tu_perfil" target="_blank"
                                                rel="noopener noreferrer">
                                                <i class="fab fa-instagram"></i>
                                            </a></li>
                                    </ul>
                                    <p class="variat pad_roght2" style="color: black;">¡No te pierdas ni un detalle de
                                        nuestro sitio web!
                                        Síguenos en nuestras redes sociales para mantenerte al tanto de todas las
                                        novedades y sorpresas que tenemos preparadas para ti.
                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <h3 style="color: black; font-size: 30px;">Servicios </h3>
                                    <p class="variat pad_roght2" style="color: black;">


                                        Conecta con un profesional escribiéndole directamente.

                                        Únete a nuestro foro virtual

                                        Encuentra información

                                        Conoce nuestras líneas de ayuda

                                    </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <h3 style="color: black; font-size: 30px;">información</h3>
                                    <ul class="link_menu">
                                        <li><a style="color: black;" href="index.php">Inicio</a></li>
                                        <li><a style="color: black;" href="#"> Regístrate</a></li>
                                        <li><a style="color: black;" href="#">Servicios</a></li>
                                        <li><a style="color: black;" href="#">Galeria</a></li>
                                        <li><a style="color: black;" href="#">Testimonios</a></li>
                                        <li><a style="color: black;" href="#">Contátenos</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <h3 style="color: black; font-size: 30px;">Nuestro <br> Equipo</h3>
                                    <p class="variat" style="color: black;">
                                        Psicologa Martha Botero.
                                        Psicologo Oscar Oquendo.
                                        Psicologa Natalia Marín.
                                    </p>
                                </div>
                                <div class="col-md-6 offset-md-6">
                                    <form id="hkh" class="bottom_form">
                                        <input style="color: black;" class="enter" placeholder="Escribe tu correo: "
                                            type="text" name="Enter your email">
                                        <button class="sub_btn" style="color: black;">Contáctanos</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                </footer>
            </section>
        </section>
    </section>

    <script src="Usuario/Theme/assets/js/jquery.js"></script>
    <script src="Usuario/Theme/assets/js/bootstrap.min.js"></script>

    <!-- Dentro de este archivo JavaScript, solo he insertado preguntas y opciones. -->


    <!-- Dentro de este archivo JavaScript he codificado todos los códigos de prueba -->
    <script src="Usuario/Theme/Js-Test/preguntas.js"></script>
    <script src="Usuario/Theme/Js-Test/script.js"></script>



    <!-- Javascript files-->
    <script class="u-script" type="text/javascript" src="Usuario/Theme/Js-Test/nicepage.js" defer=""></script>
    <script src="Usuario/Theme/js/jquery.min.js"></script>
    <script src="Usuario/Theme/js/bootstrap.bundle.min.js"></script>
    <script src="Usuario/Theme/js/jquery-3.0.0.min.js"></script>
    <!-- sidebar --><!--Aqui comienza el resto de la conexiòn-->
    <script src="Usuario/Theme/Js-Test/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Usuario/Theme/Js-Test/custom.js"></script>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="Usuario/Theme/Js-Test/jquery.js"></script>
    <script src="Usuario/Theme/Js-Test/jquery-1.8.3.min.js"></script>
    <script src="Usuario/Theme/Js-Test/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="Usuario/Theme/Js-Test/jquery.dcjqaccordion.2.7.js"></script>
    <script src="Usuario/Theme/Js-Test/jquery.scrollTo.min.js"></script>
    <script src="Usuario/Theme/Js-Test/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="Usuario/Theme/Js-Test/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="Usuario/Theme/Js-Test/common-scripts.js"></script>

    <script type="text/javascript" src="Usuario/Theme/Js-Test/jquery.gritter.js"></script>
    <script type="text/javascript" src="Usuario/Theme/Js-Test/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="Usuario/Theme/Js-Test/sparkline-chart.js"></script>
    <script src="Usuario/Theme/Js-Test/zabuto_calendar.js"></script>

    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({ html: true, trigger: "manual" });
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    { type: "text", label: "Special event", badge: "00" },
                    { type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script src="Usuario/Theme/Js-Test/logoutButton.js"></script>
    <script src="Usuario/Theme/Js-Test/footer.js"></script>
</body>

</html>