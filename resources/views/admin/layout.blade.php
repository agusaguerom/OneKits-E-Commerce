<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<header>
    <nav class="navbar navbar-expand-lg navheader">
        <a class="navbar-brand logoheader text-black" href="#">Nombre</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="text-black linksheader" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="text-black linksheader" href="#">Productos</a>
            </li>
            <li class="nav-item">
                <a class="text-black linksheader" href="{{ url('/nosotros') }}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="text-black linksheader" href="{{ url('/contacto') }}">Contacto</a>
            </li>
        </ul>
  </div>

  <div class="iconosheader">
    <i class="bi bi-cart4 icono"></i>
    <i class="bi bi-person icono"></i>
  </div>

    </nav>
</header>

<main>
    @yield("content")
</main>


<footer class="text-center text-lg-start  text-muted footer">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
        <span>Siguenos en Nuestras Redes</span>
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
          <p class="text-uppercase fw-bold mb-4">Nombre</p>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut ex elementum, molestie sem sit amet, congue mauris. Aliquam posuere.
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <p class="text-uppercase fw-bold mb-4">
            Productos
          </p>
          <p>
            <a href="#!" class="text-reset">Incio</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nosotros</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contacto</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Productos</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <p class="text-uppercase fw-bold mb-4">Contacto</p>
          <p><i class="fas fa-home me-3"></i> CABA, Buenos Aires</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            nombre@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
      </div>
    </div>
  </section>

  <div class="text-center p-4"  >
    © Copyright
  </div>
</footer>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
