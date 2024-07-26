@extends("layouts.admin")


@section('content')


<div class="container">
        <h1>Botin {{ $botin->nombre}}</h1>

        <div class="Botin-marca">
            <p>Marca: {{ $botin->tipomarca->nombre }}</p>
        </div>


        <div class="Botin-precio">
            <p>Precio: {{ $botin->precio }}</p>
        </div>

        <div class="Botin-dorsal">
            <p>Dorsal: {{ $botin->nombre }}</p>
        </div>

        <div class="Botin-descripcion">
            <p>Descripción: {{ $botin->Descripcion}}</p>
        </div>

        <div class="Botin-imagen">
            @foreach ($botin->imagenes as $imagen)
                <img src="{{ asset('storage/' . $imagen->url_img) }}" alt="Imagen del Botin">
            @endforeach
        </div>




        <div class="mb-3">
            <a href="{{route('botines.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('botines.edit',$botin)}}" class="btn btn-primary">Editar</a>

            <form action="{{route('botines.destroy',$botin)}}"" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Eliminar </button>
            </form>

        </div>
</div>

@endsection


















