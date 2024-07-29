@extends("layouts.admin")
@section('content')

<div class="container">

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Panel de botines</h1>

    <a href="{{ route('botines.create') }}" class="btn btn-success">Agregar Botín</a>
    <a href="#" class="btn btn-primary">Agregar Club</a>
    <a href="#" class="btn btn-primary">Agregar Marca</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($botines as $botin)
            <tr>
                <td> {{$botin->tipomarca->nombre}} </td>
                <td> {{$botin->nombre}} </td>
                <td> {{$botin->precio}} </td>
                <td>
                    <a href="{{ route('botines.show', $botin->id) }}" class="btn btn-primary">Ingresar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
