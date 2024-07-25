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


        <div class="camiseta-stock">
            <h3>Stock disponible</h3>
            @if ($stocks->isEmpty())
                <p>No hay stock disponible.</p>
            @else
                <div>
                    @foreach ($stocks as $stock)
                        <p>{{ $stock->nombre_talle }}: {{ $stock->cantidad }} unidades</p>
                    @endforeach
                </div>
            @endif
        </div>



        <div class="mb-3">
            <a href="{{route('camisetas.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('camisetas.edit',$camiseta)}}" class="btn btn-primary">Editar</a>
            <a href="{{ route('stock.create', $camiseta) }}" class="btn btn-secondary">Agregar Stock</a>


            <form action="{{route('camisetas.destroy',$camiseta)}}"" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>

        </div>
</div>

@endsection


















