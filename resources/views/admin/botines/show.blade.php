@extends("layouts.admin")


@section('content')


<div class="container">
        <h1>Botin {{ $botin->nombre}}</h1>

        <div class="Botin-marca">
            <p>Marca: {{ $botin->tipomarca->nombre }}</p>
        </div>


        <div class="Botin-precio">
            <p>Precio: {{ $botin->precio }}</p>
        </div>

        <div class="Botin-dorsal">
            <p>Dorsal: {{ $botin->nombre }}</p>
        </div>

        <div class="Botin-descripcion">
            <p>Descripción: {{ $botin->Descripcion}}</p>
        </div>

        <div class="Botin-imagen">
            @foreach ($botin->imagenes as $imagen)
                <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen del Botin">
            @endforeach
        </div>


        <div class="my-4">
            <h3>Stock disponible</h3>
            @if ($stockcalzado->isEmpty())
                <p>No hay stock disponible.</p>
            @else
                <ul class="list-group">
                    @foreach ($stockcalzado as $stock)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $stock->talleCalzado->nombre_talle }}
                            <span class="badge bg-primary rounded-pill">{{ $stock->cantidad }} unidades</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>




        <div class="mb-3">
            <a href="{{route('botines.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('botines.edit',$botin)}}" class="btn btn-primary">Editar</a>
            <a href="{{ route('botines.stock.create', $botin) }}" class="btn btn-secondary">Agregar Stock</a>

            <form action="{{route('botines.destroy',$botin)}}"" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>

        </div>
</div>

@endsection


















