@extends("layouts.admin")

@section('content')

<div class="container">
    <form action="{{route('camisetas.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-select" name="marca" id="marca">

                @foreach ($tipomarca as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo</label>
            <select class="form-select" name="equipo" id="equipo">

                @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="talle" class="form-label">Talle</label>
            <select class="form-select" name="talle" id="talle">

                @foreach ($tipotalle as $talle)
                <option value="{{ $talle->id }}">{{ $talle->nombre_talle }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="dorsal" class="form-label">Dorsal</label>
            <input type="text" class="form-control" name="dorsal" id="dorsal" placeholder="Dorsal">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="img" id="img" placeholder="Imagen">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
        </div>

            <button type="submit" class="btn btn-primary">Agregar Camiseta</button>

            <a href="{{route ('camisetas.index')}}" class="btn btn-danger">Cancelar</a>

    </form>

</div>







@endsection
