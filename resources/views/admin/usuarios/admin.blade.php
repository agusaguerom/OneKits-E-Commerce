<!--index.blade.php-->


@extends('layouts.users')

@section('contentTables')

<div class="container">


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">e-Mail</th>
      <th scope="col">Domicilio</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>

  <tbody>
    
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->domicilio->direccion }} {{ $user->domicilio->altura }}</td>


        <td>          
          <a href="{{ route('admin.usuarios.adminedit', $user) }}" class="btn btn-warning">Modificar</a> 

          <form action="{{ route('admin.usuarios.admindestroy', $user) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>  
        </form>    
        <a href="{{ route('admin.usuarios.changerol', $user) }}" class="btn btn-secondary">Cambiar Rol</a> 

      </tr>
    @endforeach

  </tbody>

</table>

</div>

@endsection