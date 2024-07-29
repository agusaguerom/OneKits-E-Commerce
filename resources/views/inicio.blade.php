@extends("layouts.tienda")

@section('content')

<!-- Carrusel -->
<div id="carouselExampleControls" class="carousel slide carrusel" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL('/img/banner1.png')}}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('/img/banner2.png')}}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('/img/banner3.png')}}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- Sección Adidas -->
<div class="container containerMasNuevo">
  <div class="row columnalomasnuevo">
    <h1 class="tituloNuevo col-auto">Adidas</h1>
    <div class="linea col"></div>
  </div>
  <div class="contenedorcards row container">
    @foreach($camisetasadidas as $camisetaadi)
      <div class="card cardInicio col-auto" style="width: 18rem;">
        @foreach($camisetaadi->imagenes as $imagen)
          <img class="card-img-top" src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camisetaadi->nombre }}">
        @endforeach
        <div class="card-body">
          <p class="card-text">{{$camisetaadi->nombre}}</p>
        </div>
        <div class="container">
          <p>$ {{$camisetaadi->precio}}</p>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Sección Puma -->
  <div class="container containerOferta">
    <div class="row columnaOferta">
      <h1 class="tituloOferta col-auto">Puma</h1>
      <div class="linea col"></div>
    </div>
    <div class="contenedorcards row container">
      @foreach($camisetaspuma as $puma)
        <div class="card cardInicio col-auto" style="width: 18rem;">
          @foreach($puma->imagenes as $imagen)
            <img class="card-img-top" src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $puma->nombre }}">
          @endforeach
          <div class="card-body">
            <p class="card-text">{{$puma->nombre}}</p>
          </div>
          <div class="container">
            <p>$ {{$puma->precio}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Sección Nike -->
  <div class="container containerOferta">
    <div class="row columnaOferta">
      <h1 class="tituloOferta col-auto">Nike</h1>
      <div class="linea col"></div>
    </div>
    <div class="contenedorcards row container">
      @foreach($camisetasnike as $nike)
        <div class="card cardInicio col-auto" style="width: 18rem;">
          @foreach($nike->imagenes as $imagen)
            <img class="card-img-top" src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $nike->nombre }}">
          @endforeach
          <div class="card-body">
            <p class="card-text">{{$nike->nombre}}</p>
          </div>
          <div class="container">
            <p>$ {{$nike->precio}}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Métodos de Pago -->
<div class="metodosPago">
  <div class="container containermetodospago">
    <img width="48" height="48" src="https://img.icons8.com/color/48/mercado-pago.png" alt="mercado-pago"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/visa.png" alt="visa"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/mastercard-logo.png" alt="mastercard-logo"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/american-express-squared.png" alt="american-express-squared"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/paypal.png" alt="paypal"/>
  </div>
</div>

@endsection
