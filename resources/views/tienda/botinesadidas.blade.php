@extends("layouts.productolayout")


@section('seccionproductos')


<div class="container containermainProductos">
<div class="row">
@foreach($adidasbotin as $adidas)


            <div class="card cardProducto" style="width: 18rem;">
                <a class="linkproductostienda" href="{{route('camisetas.select',$adidas->id)}}">

                @foreach($adidas->imagenes as $imagen)
                <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $adidas->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                @endforeach

                <div class="card-body bodyproductos">
                    <h1 class="nombreproductotienda">{{$adidas->nombre}}</h1>
                    <p class="card-text precioproductotienda">${{$adidas->precio}}</p>

                </div>
            </a>

                </div>

@endforeach
</div>
</div>
@endsection