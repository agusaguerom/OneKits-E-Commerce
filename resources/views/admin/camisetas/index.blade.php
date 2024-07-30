@extends("layouts.productosadmin")
@section('contentTables')


    <div class="container">

        @if (@session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif


        <h1>Panel de camisetas</h1>

        <a href="{{ route('camisetas.create') }}" class="btn btn-success">Agregar Camiseta</a>
        <a href="{{ route('equipos.create') }}" class="btn btn-primary">Agregar Club</a>
        <a href="{{ route('marca.create') }}" class="btn btn-primary">Agregar Marca</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Marca</th>
                <th scope="col">Equipo</th>
                <th scope="col">Dorsal</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>

              </tr>
            </thead>
            <tbody>
                @foreach ($camisetas as $camiseta)
                <tr>
                  <td> {{$camiseta->tipomarca->nombre}} </td>
                  <td> {{$camiseta->equipo->nombre}} </td>
                  <td> {{$camiseta->nombre}} </td>
                  <td> {{$camiseta->precio}} </td>

                  <td>
                    <a href="{{route('camisetas.show',$camiseta->id)}}" class="btn btn-primary"> Ingresar</a>
                  </td>
                </tr>
                @endforeach


            </tbody>
          </table>

    </div>

@endsection
