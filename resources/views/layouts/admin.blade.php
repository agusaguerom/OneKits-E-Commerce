<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="{{asset ('css/style.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                <a class="text-black linksheader" href="/">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="text-black linksheader" href="{{route('camisetas.index')}}">Panel Productos</a>
            </li>
            <li class="nav-item">
                <a class="text-black linksheader" href="{{route('admin.usuarios.index')}}">Panel Clientes</a>
            </li>
        </ul>
  </div>

  <div class="iconosheader">
    <a href="{{ route('profile.edit') }}">
    <i class="bi bi-person icono"></i>
    </a>
  </div>

    </nav>
</header>

<main>
    @yield("content")
</main>


<footer class="text-center text-lg-start  text-muted footer">


  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <p class="text-uppercase fw-bold mb-4">One Kit</p>
          <p>
          Panel de Administracion exclusivo para empleados          
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <p class="text-uppercase fw-bold mb-4">
            Productos
          </p>
          <p>
            <a href="/" class="text-reset">Incio</a>
          </p>
          <p>
            <a href="{{route('admin.usuarios.index')}}" class="text-reset">Panel Usuarios</a>
          </p>
          <p>
            <a href="{{route('camisetas.index')}}" class="text-reset">Panel Productos</a>
          </p>

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
