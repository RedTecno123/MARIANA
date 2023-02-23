<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Servicios</title>

  <!-- Vendor CSS Files -->
  <link href="assets/services/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/services/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> 
  <link href="assets/services/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/services/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/services/css/variables.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/services.css" rel="stylesheet"> 
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">CarRental</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/')}}">Inicio</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="{{ url('catalogo')}}">Vehiculos</a></li>
          <li><a class="nav-link scrollto " href="{{ url('servicios')}}">Servicios</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/')}}">Contacto</a></li>
          @if(auth()->check())
          <li><a class="getstarted scrollto" href="{{ route('login.destroy') }}">Cerrar sesion</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('login.index') }}">Log In</a></li>
          <li><a class="getstarted scrollto" href="{{ route('register.index') }}">Registro</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Nuestros Servicios</h2>
          <p>Para brindarle la mejor experiencia en Renta de Autos y para hacer más cómodo, seguro su viaje, en Veico contamos con los siguientes servicios complementarios:</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/chofer.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-person-plus-fill"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Auto con chofer</h3>
                </a>
                <p>No batalle con el tráfico, direcciones difíciles de encontrar o de problemas para encontrar estacionamiento. Deje que nuestros chóferes conduzcan y disfrute el camino desde el asiento trasero.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/plazo.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-calendar4-week"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Renta de autos a largo plazo</h3>
                </a>
                <p>Nuestro programa de renta de auto a Largo Plazo, le permite contar con un vehículo por largos periodos. Las tarifas ya incluyen mantenimiento, seguros y asistencia en el camino.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/asistencia.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-shield-fill-check"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Asistencia en el camino</h3>
                </a>
                <p>Conduzca con la tranquilidad de saber que en caso de algún problema estamos con usted para ayudarle, en caso de ponchadura, fallas de batería u olvidos de llaves dentro del vehículo.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/asiento-bebe.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-emoji-laughing"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Asiento para niños</h3>
                </a>
                <p>En CarRental-UT ofrecemos asientos para niños que se adecuan a la edad, estatura y peso sus hijos, así además de cumplir con los reglamentos de vialidad, usted tendrá la tranquilidad de que ellos viajan seguros.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="600">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/empresas.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-award"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Renta de autos para empresas</h3>
                </a>
                <p>Sea cual sea sus necesidades de transporte de su negocio, en Veico Diseñamos planes a la medida. Por una tarifa fija y sin costos iniciales usted obtiene el auto que necesita, con mantenimiento y seguros incluidos.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="700">
            <div class="service-item">
              <div class="img">
                <img src="assets/img/services/viaje.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-signpost-2"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3>Viaje turistico</h3>
                </a>
                <p>Los mejores viajes se hacen en buena compañía y sin dudas en nuestros vehículos puedes encontrar a un compañero ideal. Conócenos y descubre los mejores precios y ofertas en México.</p>
                <a href="#" class="stretched-link"></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- Vendor JS Files -->
  <script src="assets/services/vendor/aos/aos.js"></script>
  <script src="assets/services/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/services/vendor/swiper/swiper-bundle.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/services/js/main.js"></script>


</body>

</html>