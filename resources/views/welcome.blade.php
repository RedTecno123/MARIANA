<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>

  <!-- Vendor CSS Files -->
  <link href="assets/made/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/made/aos/aos.css" rel="stylesheet">
  <link href="assets/made/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/made/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/made/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/made/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/made/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/made/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">CarRental</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/logofr.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="{{ url('catalogo')}}">Vehiculos</a></li>
          <li><a class="nav-link scrollto " href="{{ url('servicios')}}">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          @if(auth()->check())
          <li><a class="getstarted scrollto" href="{{ route('login.destroy') }}">Cerrar sesion</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('login.index') }}">Iniciar sesion</a></li>
          <li><a class="getstarted scrollto" href="{{ route('register.index') }}">Registro</a></li>
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-11.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenidos a <span>Car Rental UT</span></h2>
              <p class="animate__animated animate__fadeInUp">La mejor experiencia de renta de autos en la Riviera Maya</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver mas</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-9.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Disfruta tus vacaciones</h2>
              <p class="animate__animated animate__fadeInUp">La mejor opcion para iniciar tu recorrido vacacional, disfruta de tus sitios favoritos para vacacionar en el verano!</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver mas</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-12.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Servicio de rentas</h2>
              <p class="animate__animated animate__fadeInUp">Renta tu auto, camioneta o urvan con CarRental-UT, contamos con el mejor servicio de renta de autos de la Riviera Maya</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver mas</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>¿Por que rentar un auto en CarRental-UT?</h2>
          <p>Nosotros</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                En CarRental-UT somos una empresa joven de renta de autos que verdaderamente se interesa por la satisfacción de sus clientes. Hace cinco años que iniciamos, hoy somos la empresa de Renta de Autos en la Riviera Maya mejor calificada por sus clientes y de mayor crecimiento. Logramos esto, ofreciendo solo los mejores autos de renta, siempre en las mejores condiciones y de modelo reciente.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Nuestras tarifas incluyen Kilómetros Ilimitados</li>
              <li><i class="ri-check-double-line"></i> Seguros de Cobertura Amplia e Impuestos</li>
              <li><i class="ri-check-double-line"></i> Además tenemos una política de depósitos transparente y con los montos más bajos del mercado.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                Creemos que la satisfacción de nuestros clientes hoy, es la base del éxito y continuidad de nuestro negocio. Mientras la competencia publica precios gancho, nosotros le ofrecemos precios honestamente bajos.
            </p>
            <a href="#" class="btn-learn-more">Ver mas</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/ImagenVideo2.jpg");' data-aos="zoom-in" data-aos-delay="100">
            <a href="https://www.youtube.com/watch?v=pjXpg4KNGNk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Conduce con <strong>seguridad</strong></h3>
              <p>
                Para disfrutar tus vacaciones o tu viaje de negocios sin ninguna preocupación, nosotros somos los aliados más confiables al momento de decidir rentar un auto en Cancún y la Riviera Maya, tenemos los mejores precios en alquiler de autos, ¡Reserva con nosotros!
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Los Precios más Bajos <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                        Nuestra tarifa baja es  un beneficio para tí, no busques más, somos la mejor opción en renta de autos en Cancún..
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Kilómetros Ilimitados <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                        No importa la cantidad de kilómetros que recorras, disfruta sin preocupaciones.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Pickup & Return Accesibles <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                        Nosotros vamos por tí al Aeropuerto, te entregamos tu auto y al devolver te llevamos de vuelta.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->



    <!-- ======= Services Section ======= -->
    <section id="Decripcion" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>¿Porque reservar con nosotros?</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Viaja seguro</a></h4>
              <p>Tu seguridad y la de los tuyos es nuestra prioridad, te cuidamos en todos los detalles</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-car"></i></div>
              <h4><a href="">Flota renovada</a></h4>
              <p>Todos nuestros vehiculos son nuevos, teniendo como maximo 2 años de uso</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-time-five"></i></div>
              <h4><a href="">Reserva eficaz</a></h4>
              <p>Reserva en linea y gestiona todos los detalles desde nuestra pagina web</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-dollar-circle"></i></div>
              <h4><a href="">Consigue las mejores ofertas sobre ruedas</a></h4>
              <p>Desde carros familiares hasta convertibles de lujo, obtendrás el mejor precio para cada tipo de auto.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-directions"></i></div>
              <h4><a href="">Sigue en el camino</a></h4>
              <p>No importa tu destino, nosotros nos encargamos de que escojas el mejor auto de la manera más fácil.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-user-check"></i></div>
              <h4><a href="">Higiene y sanitización</a></h4>
              <p>En CarRental-UT mantenemos un trabajo constante para cuidar de tu seguridad y la de toda tu familia</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


  <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Aprovecha las ventajas de viajar en auto en la Riviera Maya</h3>
          <p>¿Quién no añora estar frente al mar de Cancún? Con las hermosas tonalidades en azul y verde del Caribe Mexicano y sus bellas playas de arena blanca y fina, es sin duda uno de los destinos favoritos para vacacionar. Sin embargo, Cancún es mucho más que un hotel cinco estrellas, pues ahí podrás empaparte de la cultura maya en sus zonas arqueológicas como el Meco y el Rey, deleitarte en sus verdaderos paraísos ecoturísticos como Xcaret o disfrutar de un excelente ambiente en su vida nocturna a lo largo de la zona hotelera.

            Con tantas actividades y atracciones por disfrutar, contar con un servicio de renta de autos es más que un beneficio. Toma el control de tu viaje y recorre lo mejor de la Riviera Maya agregando destinos como Playa del Carmen, Puerto Morelos, Cozumel o Tulum. Así que maneja un auto Avis y déjate consentir por el viento, el sol y el mar del Caribe..</p>
          <a class="cta-btn" href="#">Ver mas</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>CarRental-UT</h2>
        <p>Contactanos</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Ubicacion</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Correo electronico</h3>
                <p>CarRental-UT@gmail.com<br>ReservacionesCarRental@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Llamanos</h3>
                <p>+52 9981212144<br>+52 9981608777</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->




<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>CarRental-UT</h3>
            <p>
              KM 13, Mz 30, Lt 1, Loc 11,<br>
              Blvd D. Colosio Carrretera <br>
              Cancún - Apto. Cancún Q. R.<br>
              <strong>Phone:</strong> 9981212144<br>
              <strong>Email:</strong> CarRental-UT@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://m.facebook.com/almalibrecancunac/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://mail.google.com/mail/u/0/#search/almalibrecancun%40gmail.com" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://us05web.zoom.us/j/86327050519?pwd=SUI3aUhTWVd0dXNYTlhkMStRZnFTUT09" class="videollamada"><i class="bx bx-video"></i></a>
              <a href="https://wa.link/m42osk" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="tel:+52998821423" class="phone"><i class="bx bx-phone"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Menu</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Inicio</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#about">Nosotros</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('catalogo')}}">Vehiculos</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('servicios')}}">Servicios</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contacto</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Servicios</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Auto con chofer</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Renta de autos a largo plazo</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Asistencia en el camino</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Asiento para niños</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Renta de autos para empresas</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Viaje turistico</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Buscas algo mas?</h4>
          <p>Envianos tu correo electronico y nosotros te contactamos!</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Enviar">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>CarRental-UT</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Ernesto Chacon</a>
    </div>
  </div>
</footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="assets/made/purecounter/purecounter.js"></script>
  <script src="assets/made/aos/aos.js"></script>
  <script src="assets/made/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/made/glightbox/js/glightbox.min.js"></script>
  <script src="assets/made/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/made/swiper/swiper-bundle.min.js"></script>
  <script src="assets/made/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>