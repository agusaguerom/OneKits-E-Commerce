@extends('layouts.tienda')

@section('content')


<div class="container">

<h1 class="text-center">Camisetas</h1>
<div class="seleccionarmarca">
    <a class="linkselectmarca" href="{{route('productos')}}">Ver Todo</a>

    <a class="linkselectmarca" href="{{route('puma')}}">Puma</a>
    <a class="linkselectmarca" href="{{route('nike')}}">Nike</a>
    <a class="linkselectmarca" href="{{route('adidas')}}">Adidas</a>

</div>
</div>

@yield('seccionproductos')

@endsection