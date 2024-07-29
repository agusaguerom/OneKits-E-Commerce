@extends('layouts.tienda')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6">
      @foreach($camiseta->imagenes as $imagen)
        <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camiseta->nombre }}" class="img-fluid" style="max-width: 100%; height: auto; margin-bottom: 15px;">
      @endforeach
    </div>

    <div class="col-md-6">
      <h1 class="titulocamisetaselec">{{$camiseta->nombre}}</h1>
      <p class="precioocamisetaselec">${{$camiseta->precio}}</p>

      @if ($stocks->isEmpty())
        <p>No hay stock disponible.</p>
      @else
        <form action="{{ route('carrito.add') }}" method="POST">
          @csrf
          <input type="hidden" name="fk_camiseta" value="{{ $camiseta->id }}">
          <div class="form-group">
            <label for="talleelegido">Escoge el talle</label>
            <select name="talleelegido" id="talleelegido" class="form-control">
              @foreach($stocks as $stock)
                <option value="{{ $stock->id }}">{{ $stock->nombre_talle }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <input type="number" name="cantidad" value="1" min="1" class="form-control">
            <button class="btn btn-success btnformagregarcarrito" type="submit">Agregar al Carrito</button>
          </div>
        </form>
      @endif
    </div>
  </div>

  <div class="infocamisetaselec mt-4">
    <h2>Descripción</h2>
    <p>{{$camiseta->Descripcion}}</p>

    <h2>Marca</h2>
    <p>{{$camiseta->tipomarca->nombre}}</p>
  </div>

  <div class="container containermainProductos mt-5">
    <h1>Recomendados</h1>

    <div class="row">
      @foreach($recomendaciones as $recomendacion)
        <div class="card cardProducto" style="width: 18rem;">
          <a class="linkproductostienda" href="{{ route('camisetas.select', $recomendacion->id) }}">
            @foreach($recomendacion->imagenes as $imagen)
              <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $recomendacion->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
            @endforeach
            <div class="card-body bodyproductos">
              <h2 class="nombreproductotienda">{{$recomendacion->nombre}}</h2>
              <p class="card-text precioproductotienda">${{$recomendacion->precio}}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
