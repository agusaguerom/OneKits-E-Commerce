@extends("layouts.admin")

@section('content')

<div class="container">
    <h1 class="my-4">Botín {{ $botin->nombre }}</h1>

    <div class="row">

        <div class="col-md-6">
            <div class="mb-3">
                <h4>Marca</h4>
                <p>{{ $botin->tipomarca->nombre }}</p>
            </div>

            <div class="mb-3">
                <h4>Precio</h4>
                <p>${{ number_format($botin->precio, 2) }}</p>
            </div>

            <div class="mb-3">
                <h4>Nombre</h4>
                <p>{{ $botin->nombre }}</p>
            </div>

            <div class="mb-3">
                <h4>Descripción</h4>
                <p>{{ $botin->Descripcion }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                @foreach($botin->imagenes as $imagen)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $botin->nombre }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
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
        <a href="{{route('botines.edit', $botin)}}" class="btn btn-warning">Editar</a>
        <a href="{{ route('botines.stock.create', $botin) }}" class="btn btn-secondary">Agregar Stock</a>

        <form action="{{ route('botines.destroy', $botin) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</div>

@endsection
