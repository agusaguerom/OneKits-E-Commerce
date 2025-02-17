<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<header>

  <nav class="navbar navbar-expand-lg  navbar-light bg-light navheader">

    <a href="/">
      <img src="{{ URL('/img/logo.svg') }}" width="70px" height="70px" alt="Logo">
    </a>
  
  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="text-black linksheader nav-link" href="{{ url('/') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="text-black linksheader nav-link" href="{{ url('/productos') }}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="text-black linksheader nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="text-black linksheader nav-link" href="{{ url('/contacto') }}">Contacto</a>
        </li>

        @if(Auth::user() and Auth::user()->fk_tipo_usuario == 2)
        <li class="nav-item">
          <a class="text-black linksheader nav-link" href="{{ url('/admin') }}">Panel</a>
        </li>
        @endif
      </ul>
  
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ route('carrito.index') }}" class="nav-link">
            <i class="bi bi-cart4 icono text-black"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('profile.edit') }}" class="nav-link">
            <i class="bi bi-person icono text-black"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  
</header>

    <main>
        @yield("content")
    </main>

<footer class="text-center text-lg-start text-muted footer">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5 d-none d-lg-block">
      <span>Síguenos en Nuestras Redes</span>
    </div>

    <div>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-twitter-x"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
         <i class="bi bi-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
       <i class="bi bi-github"></i>
      </a>
    </div>
  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <p class="text-uppercase fw-bold mb-4">One Kits</p>
          <p>
            Nuestra misión es proporcionar a los aficionados una experiencia de compra única, donde la pasión por el fútbol se refleja en cada detalle.          
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <p class="text-uppercase fw-bold mb-4">
            Productos
          </p>
          <p>





            <a href="{{ url('/') }}" class="text-reset">Inicio</a>
          </p>
          <p>
            <a href="{{ url('/nosotros') }}" class="text-reset">Nosotros</a>
          </p>
          <p>
            <a href="{{ url('/contacto') }}" class="text-reset">Contacto</a>
          </p>
          <p>
            <a href="{{ url('/productos') }}" class="text-reset">Productos</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <p class="text-uppercase fw-bold mb-4">Contacto</p>
          <p><i class="fas fa-home me-3"></i> Av de Mayo 892, Ciudad Autonoma Buenos Aires</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            onekits@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-4">
    © Copyright
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
