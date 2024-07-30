@extends('layouts.tienda')

@section('content')

<div class="container contenedorselectmarca">

    <div class="seleccionarmarca col">
        <a class="linkselectmarca" href="{{route('productos.index')}}">Ver Todo</a>
    
        <a class="linkselectmarca" href="{{route('puma')}}">Puma</a>
        <a class="linkselectmarca" href="{{route('nike')}}">Nike</a>
        <a class="linkselectmarca" href="{{route('adidas')}}">Adidas</a>
    
    </div>
    </div>
  

@yield('seccionproductos')

@endsection
