<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>

    <link href="assets/css/services.css" rel="stylesheet"> 

    <!-- Template Main CSS File -->
    <link href="assets/css/catalogo.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    

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

    <div class="section-header">
        <h2></h2>
        <p></p>
      </div>

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            @foreach($autos as $auto)
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded mt-2">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{ asset('storage').'/'.$auto->Foto}}" width="450px" alt="{{$auto->Modelo}}"></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{ $auto->Marca }} - {{ $auto->Modelo }}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1"><span>{{ $auto->Año}}</span>
                            <span class="dot"></span><span>{{ $auto->Transmicion}}</span><span class="dot"></span><span>{{ $auto->Tipo}}<br></span></div>
                        <div class="mt-1 mb-1 spec-1"><span></span><span class=""></span><span></span><span class=""></span><span><br></span></div>
                        <p class="text-justify text-truncate para mb-0">{{ $auto->Estado}}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-3">${{ $auto->Precio}}</h4><span class="strike-text"></span>
                        </div>
                        <h6 class="text-success">Disponible</h6>
                        <div class="d-flex flex-column mt-4">
                          <a class="btn btn-primary btn-sm" href="tel:+529981608777">Llamar a un agente</a>
                          <br>
                          
                          <a class="btn btn-primary btn-sm" href="{{ url('paypal') }}">Pagar con Paypal</a>
                        </div>  
                          
                          
                          
                          
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>

    

    

    

    



<!-- Load the required checkout.js script -->
<script src="https://www.paypalobjects.com/api/checkout.js" data-version-4></script>
 
<!-- Load the required Braintree components. -->
<script src="https://js.braintreegateway.com/web/3.39.0/js/client.min.js"></script>
<script src="https://js.braintreegateway.com/web/3.39.0/js/paypal-checkout.min.js"></script>
    
</body>



</html>



