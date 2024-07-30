@extends('layouts.tienda')

@section('content')

<div class="container contenedorselectmarca">
    <div class="d-flex align-items-center">
        <a class="linkselectmarca me-3" href="/productos">Ver Todo</a>
        <div class="dropdown btndesplegable me-3">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Camisetas
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{route('nike')}}">Nike</a></li>
                <li><a class="dropdown-item" href="{{route('adidas')}}">Adidas</a></li>
                <li><a class="dropdown-item" href="{{route('puma')}}">Puma</a></li>
            </ul>
        </div>
        <div class="dropdown btndesplegable">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                Botines
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                <li><a class="dropdown-item" href="{{route('nikebotines')}}">Nike</a></li>
                <li><a class="dropdown-item" href="{{route('adidasbotines')}}">Adidas</a></li>
                <li><a class="dropdown-item" href="{{route('pumabotines')}}">Puma</a></li>
            </ul>
        </div>
    </div>
</div>


   
  

@yield('seccionproductos')

@endsection
