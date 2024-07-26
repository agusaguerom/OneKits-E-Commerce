@extends("layouts.admin")

@section('content')

<div class="container">
    <form action="{{ route('botines.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>



        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio">
        </div>



        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" name="Descripcion" id="Descripcion" rows="3"></textarea>
        </div>



        <div class="mb-3">
            <label for="imagenes" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imagenes[]" id="imagenes" multiple>
        </div>


        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Agregar Botin</button>
            <a href="{{route ('botines.index')}}" class="btn btn-danger">Cancelar</a>
        </div>


    </form>

</div>







@endsection
