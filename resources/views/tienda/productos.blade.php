@extends("layouts.productolayout")

@section('seccionproductos')

<div class="container containermainProductos">
  <div class="row">
    @foreach($camisetas as $camiseta)
      <div class="card cardProducto" style="width: 18rem;">
        <a class="linkproductostienda" href="{{ route('camisetas.select', $camiseta->id) }}">
          @foreach($camiseta->imagenes as $imagen)
            <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camiseta->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
          @endforeach
          <div class="card-body bodyproductos">
            <h1 class="nombreproductotienda">{{$camiseta->nombre}}</h1>
            <p class="marcaproductotienda">{{ $camiseta->tipomarca->nombre }}</p>
            <div>
            <p class="card-text precioproductotienda">${{ number_format($camiseta->precio, 0, ',', '.') }}</p>
          </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
@section('content')

<h2 class="container text-center">Camisetas</h2>

<div class="container containermainProductos">
    <div class="row">
        @foreach($camisetas as $camiseta)
            <div class="card cardProducto" style="width: 18rem;">
                <a class="linkproductostienda" href="{{ route('camisetas.select', $camiseta->id) }}">
                    @foreach($camiseta->imagenes as $imagen)
                        <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camiseta->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                    @endforeach

                    <div class="card-body bodyproductos">
                        <h1 class="nombreproductotienda">{{ $camiseta->nombre }}</h1>
                        <p class="card-text precioproductotienda">${{ $camiseta->precio }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

<h2 class="container text-center mt-5">Botines</h2>

<div class="container containermainProductos">
    <div class="row">
        @foreach($botines as $botin)
            <div class="card cardProducto" style="width: 18rem;">
                <a class="linkproductostienda" href="{{ route('botines.select', $botin->id) }}">
                    @foreach($botin->imagenes as $imagen)
                        <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $botin->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                    @endforeach

                    <div class="card-body bodyproductos">
                        <h1 class="nombreproductotienda">{{ $botin->nombre }}</h1>
                        <p class="card-text precioproductotienda">${{ $botin->precio }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
