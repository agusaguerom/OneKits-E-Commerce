@extends("layouts.productolayout")


@section('seccionproductos')


<div class="container containermainProductos">
<div class="row">
@foreach($nikecamiseta as $nike)


            <div class="card cardProducto" style="width: 18rem;">
                <a class="linkproductostienda" href="{{route('camisetas.select',$nike->id)}}">

                @foreach($nike->imagenes as $imagen)
                <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $nike->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                @endforeach

                <div class="card-body bodyproductos">
                    <h1 class="nombreproductotienda">{{$nike->nombre}}</h1>
                    <p class="card-text precioproductotienda">${{$nike->precio}}</p>

                </div>
            </a>

                </div>

@endforeach
</div>
</div>







@endsection
