@extends("layouts.admin")
@section('content')

    <div class="container">
        <h1>Lista de camisetas</h1>

        <a href="{{ route('camisetas.create')}}" class="btn btn-primary">Agregar Camiseta</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Marca</th>
                <th scope="col">Equipo</th>
                <th scope="col">Talle</th>
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
                  <td> {{$camiseta->tipotalle->nombre_talle}} </td>
                  <td> {{$camiseta->nombre}} </td>
                  <td> {{$camiseta->precio}} </td>

                  <td>
                    <a href="btn btn-primary"> Ingresar</a>
                  </td>
                </tr>
                @endforeach


            </tbody>
          </table>

    </div>

@endsection
