@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Agregar Stock para la Camiseta {{ $camiseta->nombre }}</h1>

    <form action="{{ route('stock.store', $camiseta) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="tipo_talle" class="form-label">Tipo de Talle</label>
            <select class="form-select" name="fk_tipo_talle" id="tipo_talle">
                @foreach ($tipotalle as $talle)
                    <option value="{{ $talle->id }}">{{ $talle->nombre_talle }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary">Agregar Stock</button>
        <a href="{{ route('camisetas.show', $camiseta) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
