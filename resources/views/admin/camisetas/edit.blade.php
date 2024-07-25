@extends("layouts.admin")

@section('content')

<div class="container">
    <form action=" {{route('camisetas.update',$camiseta)}}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="fk_tipo_marca" class="form-label">Marca</label>
            <select class="form-select" name="fk_tipo_marca" id="fk_tipo_marca">

                @foreach ($tipomarca as $marca)
                <option value="{{ $marca->id }}" {{ $camiseta->fk_tipo_marca == $marca->id ? 'selected' : '' }}>
                {{$marca->nombre }}
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="fk_equipo" class="form-label">Equipo</label>
            <select class="form-select" name="fk_equipo" id="fk_equipo">

                @foreach ($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $camiseta->fk_equipo == $equipo->id ? 'selected' : '' }}>
                {{ $equipo->nombre }}
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="fk_tipo_talle" class="form-label">Talle</label>
            <select class="form-select" name="fk_tipo_talle" id="fk_tipo_talle">

                @foreach ($tipotalle as $talle)
                <option value="{{ $talle->id }}" {{ $camiseta->fk_tipo_talle == $talle->id ? 'selected' : '' }}>
                {{ $talle->nombre_talle }}
                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Dorsal</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Dorsal" value="{{$camiseta->nombre}}">
        </div>


        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="{{$camiseta->precio}}">
        </div>

        <div class="mb-3">
            <label for="fk_fotos" class="form-label">Imagen</label>
            <input type="text" class="form-control" name="fk_fotos" id="fk_fotos" placeholder="Imagen">
        </div>


        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" name="descripcion" id="Descripcion" rows="3">{{ $camiseta->Descripcion }}
            </textarea>

        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Modificar</button>

            <a href="{{route ('camisetas.index')}}" class="btn btn-danger">Cancelar</a>

        </div>

    </form>

</div>







@endsection
