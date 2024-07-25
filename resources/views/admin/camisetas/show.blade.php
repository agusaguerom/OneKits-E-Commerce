@extends("layouts.admin")


@section('content')


<div class="container">
        <h1>Camiseta {{ $camiseta->equipo->nombre }}</h1>

        <div class="camiseta-equipo">
            <p>Equipo: {{ $camiseta->equipo->nombre }}</p>
        </div>

        <div class="camiseta-marca">
            <p>Marca: {{ $camiseta->tipomarca->nombre }}</p>
        </div>

        <div class="camiseta-talle">
            <p>Talle: {{ $camiseta->tipotalle->nombre_talle }}</p>
        </div>

        <div class="camiseta-precio">
            <p>Precio: {{ $camiseta->precio }}</p>
        </div>

        <div class="camiseta-dorsal">
            <p>Dorsal: {{ $camiseta->nombre }}</p>
        </div>

        <div class="camiseta-descripcion">
            <p>Descripción: {{ $camiseta->Descripcion}}</p>
        </div>

        <div class="camiseta-imagen">
            <img src="{{ $camiseta->fk_fotos }}" alt="Imagen de la camiseta">
        </div>



        <div class="mb-3">
            <a href="{{route('camisetas.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('camisetas.edit',$camiseta)}}" class="btn btn-primary">Editar</a>
        </div>
</div>

@endsection


















