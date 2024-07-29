@extends("layouts.tienda")

@section('content')

<h1 class="container text-center">Camisetas</h1>

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
            <p class="card-text precioproductotienda">${{$camiseta->precio}}</p>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>

@endsection
