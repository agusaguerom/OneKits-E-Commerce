@extends("layouts.tienda")


@section('content')

    <div class="container">
        <div class="row align-items-center">
        <div class="col-md-6">
            @foreach($camiseta->imagenes as $imagen)
            <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camiseta->nombre }}" class="img-fluid" style="max-width: 100%; height: auto; margin-bottom: 15px;">
             @endforeach
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
                <form action="" class="formagregarcarrito">
                    @csrf
                    @foreach($stocks as $stock)
                    
                   
               
                    <div class="form-group">
                        <label for="talleelegido">Escoge el talle</label>
                        <select name="talleelegido" id="talleelegido" class="form-control">
                            <option value="{{$stock->nombre_talle}}">{{$stock->nombre_talle}}</option>
                        </select>
                    </div>
                    @endforeach
                    <button class="btn btn-success btnformagregarcarrito" type="submit">Agregar al Carrito</button>
                </form>

                @endif   

                <div class="metodosPago">
                    <div class="container containermetodospago">
                    <img width="48" height="48" src="https://img.icons8.com/color/48/mercado-pago.png" alt="mercado-pago"/>
                    <img width="48" height="48" src="https://img.icons8.com/color/48/visa.png" alt="visa"/>
                    <img width="48" height="48" src="https://img.icons8.com/color/48/mastercard-logo.png" alt="mastercard-logo"/>
                    <img width="48" height="48" src="https://img.icons8.com/color/48/american-express-squared.png" alt="american-express-squared"/>
                    <img width="48" height="48" src="https://img.icons8.com/color/48/paypal.png" alt="paypal"/>
                    </div>
                    </div>

        </div>
    </div>
    
    <div class="infocamisetaselec">  
        <h2>Descripcion</h2>
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

                    <input type="number" name="cantidad" value="1" min="1" class="form-control">
                    <button class="btn btn-success btnformagregarcarrito" type="submit">Agregar al Carrito</button>
            </form>

            @endif

        </div>
    </div>

    <div class="infocamisetaselec">
        <h2>Descripción</h2>
        <p>{{$camiseta->Descripcion}}</p>

        <h2>Marca</h2>
        <p>{{$camiseta->tipomarca->nombre}}</p>
    </div>


    <div class="container containermainProductos">

        <h1 class="titulorecomendados">Recomendados</h1>

        <div class="row">
        @foreach($recomendaciones as $recomendacion)
        
        
                    <div class="card cardProducto" style="width: 18rem;">
                        <a class="linkproductostienda" href="{{route('camisetas.select',$recomendacion->id)}}">
        
                        @foreach($recomendacion->imagenes as $imagen)
                        <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $recomendacion->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                        @endforeach
        
                        <div class="card-body bodyproductos">
                            <h1 class="nombreproductotienda">{{$recomendacion->nombre}}</h1>
                            <p class="card-text precioproductotienda">${{$recomendacion->precio}}</p>
        
                        </div>
                    </a>
        
                        </div>
        
        @endforeach
        </div>
        </div>

    </div>
    <div class="container containermainProductos">

        <h1>Recomendados</h1>

        <div class="row">
            @foreach($recomendaciones as $recomendacion)
                <div class="card cardProducto" style="width: 18rem;">
                    <a class="linkproductostienda" href="{{route('camisetas.select',$recomendacion->id)}}">
                        @foreach($recomendacion->imagenes as $imagen)
                            <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $recomendacion->nombre }}" class="img-fluid" style="max-width: 100%; height: auto;">
                        @endforeach

                        <div class="card-body bodyproductos">
                            <h1 class="nombreproductotienda">{{$recomendacion->nombre}}</h1>
                            <p class="card-text precioproductotienda">${{$recomendacion->precio}}</p>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
