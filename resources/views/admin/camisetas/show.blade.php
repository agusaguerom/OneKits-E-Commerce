@extends("layouts.admin")


@section('content')


<div class="container">
    <h1 class="my-4">Camiseta {{ $camiseta->equipo->nombre }}</h1>

    <div class="row">
        <!-- Información de la camiseta -->
        <div class="col-md-6">
            <div class="mb-3">
                <h4>Equipo</h4>
                <p>{{ $camiseta->equipo->nombre }}</p>
            </div>

            <div class="mb-3">
                <h4>Marca</h4>
                <p>{{ $camiseta->tipomarca->nombre }}</p>
            </div>

            <div class="mb-3">
                <h4>Precio</h4>
                <p>${{ number_format($camiseta->precio, 2) }}</p>
            </div>

            <div class="mb-3">
                <h4>Nombre</h4>
                <p>{{ $camiseta->nombre }}</p>
            </div>

            <div class="mb-3">
                <h4>Descripción</h4>
                <p>{{ $camiseta->Descripcion }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                @foreach($camiseta->imagenes as $imagen)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen de {{ $camiseta->nombre }}" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>



    <div class="my-4">
        <h3>Stock disponible</h3>
        @if ($stocks->isEmpty())
            <p>No hay stock disponible.</p>
        @else
            <ul class="list-group">
                @foreach ($stocks as $stock)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $stock->nombre_talle }}
                        <span class="badge bg-primary rounded-pill">{{ $stock->cantidad }} unidades</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>



    <div class="mb-3">
        <a href="{{route('camisetas.index')}}" class="btn btn-primary">Volver</a>
        <a href="{{route('camisetas.edit', $camiseta)}}" class="btn btn-warning">Editar</a>
        <a href="{{ route('camisetas.stock.create', $camiseta) }}" class="btn btn-secondary">Agregar Stock</a>

        <form action="{{route('camisetas.destroy', $camiseta)}}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</div>

@endsection


















