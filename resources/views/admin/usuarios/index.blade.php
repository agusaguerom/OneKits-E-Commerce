<!--index.blade.php-->

@extends('layouts.users')

@section('contentTables')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
@if (session('statusDelete'))
    <div class="alert alert-danger">
        {{ session('statusDelete') }}
    </div>
@endif

@if (session('successRol'))
    <div class="alert alert-success">
        {{ session('successRol') }}
    </div>
@endif

<div class="container">


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">e-Mail</th>
      <th scope="col">Direccion</th>
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
          <a href="{{ route('admin.usuarios.usuariosedit', $user) }}" class="btn btn-warning">Modificar</a> 

          <form action="{{ route('admin.usuarios.usuariosdestroy', $user) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>  
        </form>
        <a href="{{ route('admin.usuarios.changerol', $user) }}" class="btn btn-secondary">Cambiar Rol</a> 

  

        </td>


    </tr>
    @endforeach

  </tbody>

</table>

</div>

@endsection