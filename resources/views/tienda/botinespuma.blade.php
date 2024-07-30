@extends("layouts.productolayout")


@section('seccionproductos')


<div class="container containermainProductos">
<div class="row">
@foreach($pumabotin as $puma)


            <div class="card cardProducto" style="width: 18rem;">
                <a class="linkproductostienda" href="{{route('camisetas.select',$puma->id)}}">

                @foreach($puma->imagenes as $imagen)
                <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $puma->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                @endforeach

                <div class="card-body bodyproductos">
                    <h1 class="nombreproductotienda">{{$puma->nombre}}</h1>
                    <p class="card-text precioproductotienda">${{$puma->precio}}</p>

                </div>
            </a>

                </div>

@endforeach
</div>
</div>
