@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="my-4">Agregar Stock para {{ $botin->nombre }}</h1>

    <form action="{{ route('botines.stock.store', $botin) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="fk_talle_calzados" class="form-label">Tipo de Talle</label>
            <select class="form-select" name="fk_talle_calzados" id="fk_talle_calzados" required>
                <option value="" disabled selected>Seleccione un tipo de talle</option>
                @foreach ($tallecalzado as $talle)
                    <option value="{{ $talle->id }}">{{ $talle->nombre_talle }}</option>
                @endforeach

            </select>
            @error('fk_talle_calzados')
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


        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Agregar Stock</button>
            <a href="{{ route('botines.show', $botin) }}" class="btn btn-secondary">Volver</a>
        </div>

    </form>
</div>
@endsection
