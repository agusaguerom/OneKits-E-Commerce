@extends("layouts.admin")

@section('content')

<div class="container">
    <form action="">
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-select" id="marca">
                <option selected>Marca</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="equipo" class="form-label">Equipo</label>
            <select class="form-select" id="equipo">

                @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="talle" class="form-label">Talle</label>
            <select class="form-select" id="talle">
                <option selected>Talle</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dorsal" class="form-label">Dorsal</label>
            <input type="text" class="form-control" id="dorsal" placeholder="Dorsal">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" placeholder="Precio">
        </div>

        <div class="mb-3">
            <label for="imagen">Cargar imagen del Producto</label>
            <input id="imagen" type="file" name="imagen" class="form-control">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" id="descripcion" rows="3"></textarea>
        </div>

            <button type="submit" class="btn btn-primary">Agregar Camiseta</button>

            <a href="{{route ('camisetas.index')}}" class="btn btn-danger">Cancelar</a>

    </form>

</div>







@endsection
