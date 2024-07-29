@extends('layouts.tienda')

@section('content')

<div class="container">
  <div class="row align-items-center">
    <!-- Sección de imágenes -->
    <div class="col-md-6 imagenes-camiseta">
      @foreach($camiseta->imagenes as $imagen)
        <img src="{{ asset('storage/' . $imagen->url_img) }}"
             alt="Imagen de {{ $camiseta->nombre }}"
             class="img-fluid img-camiseta">
      @endforeach
    </div>

    <!-- Sección de detalles del producto -->
    <div class="col-md-6 detalles-camiseta">
      <h1 class="titulocamisetaselec">{{ $camiseta->nombre }}</h1>
      <p class="precioocamisetaselec">${{ $camiseta->precio }}</p>

      @if ($stocks->isEmpty())
        <p class="no-stock">No hay stock disponible.</p>
      @else
        <form action="{{ route('carrito.add') }}" method="POST" class="form-agregar-carrito">
          @csrf
          <input type="hidden" name="fk_camiseta" value="{{ $camiseta->id }}">
          <div class="form-group">
            <label for="talleelegido" class="label-talle">Escoge el talle</label>
            <select name="talleelegido" id="talleelegido" class="form-control select-talle">
              @foreach($stocks as $stock)
                <option value="{{ $stock->id }}">{{ $stock->nombre_talle }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3 cantidad-carrito">
            <input type="number" name="cantidad" value="1" min="1" class="form-control input-cantidad">
            <button class="btn btn-success btnformagregarcarrito" type="submit">Agregar al Carrito</button>
          </div>
        </form>
      @endif
    </div>
  </div>

  <!-- Sección de descripción y marca -->
  <div class="infocamisetaselec mt-4">
    <h2>Descripción</h2>
    <p class="descripcion-camiseta">{{ $camiseta->Descripcion }}</p>

    <h2>Marca</h2>
    <p class="marca-camiseta">{{ $camiseta->tipomarca->nombre }}</p>
  </div>

  <!-- Sección de productos recomendados -->
  <div class="container containermainProductos mt-5">
    <h1>Recomendados</h1>

    <div class="row">
      @foreach($recomendaciones as $recomendacion)
        <div class="card cardProducto" style="width: 18rem;">
          <a class="linkproductostienda" href="{{ route('camisetas.select', $recomendacion->id) }}">
            @foreach($recomendacion->imagenes as $imagen)
              <img src="{{ asset('storage/' . $imagen->url_img) }}"
                   alt="Imagen de {{ $recomendacion->nombre }}"
                   class="img-fluid img-producto">
            @endforeach
            <div class="card-body bodyproductos">
              <h2 class="nombreproductotienda">{{ $recomendacion->nombre }}</h2>
              <p class="card-text precioproductotienda">${{ $recomendacion->precio }}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
