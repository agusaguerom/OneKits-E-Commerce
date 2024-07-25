@extends("layouts.admin")

@section('content')

<div class="container">
    <form action="{{ route('botines.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="fk_tipo_marca" class="form-label">Marca</label>
            <select class="form-select" name="fk_tipo_marca" id="fk_tipo_marca">

                @foreach ($tipomarca as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach

            </select>
        </div>


        <div class="mb-3">
            <label for="fk_talle_calzado" class="form-label">Talle</label>
            <select class="form-select" name="fk_talle_calzado" id="fk_talle_calzado">

                @foreach ($tallecalzado as $talle)
                    <option value="{{ $talle->id }}">{{ $talle->nombre_talle }}</option>
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre/Modelo</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>


        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
        </div>


        <div class="mb-3">
            <label for="fk_fotos" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="fk_fotos" id="fk_fotos" placeholder="Imagen">
        </div>

        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Agregar Botin</button>
            <a href="{{route ('botines.index')}}" class="btn btn-danger">Cancelar</a>
        </div>

    </form>

</div>







@endsection
