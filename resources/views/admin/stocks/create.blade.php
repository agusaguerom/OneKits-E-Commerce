@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Agregar Stock para {{ $camiseta->nombre }}</h1>

    <form action="{{ route('camisetas.stock.store', $camiseta) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="tipo_talle" class="form-label">Tipo de Talle</label>
            <select class="form-select" name="fk_tipo_talle" id="tipo_talle" required>
                <option value="" disabled selected>Seleccione un tipo de talle</option>
                @foreach ($tipotalle as $talle)
                    <option value="{{ $talle->id }}">{{ $talle->nombre_talle }}</option>
                @endforeach

            </select>
            @error('fk_tipo_talle')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad" min="1" required>
            @error('cantidad')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Botones de Acción -->
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Agregar Stock</button>
            <a href="{{ route('camisetas.show', $camiseta) }}" class="btn btn-secondary">Volver</a>
        </div>
    </form>
</div>
@endsection
