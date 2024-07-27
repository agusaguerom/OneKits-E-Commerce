<!--index.blade.php-->


@extends('layouts.users')

@section('contentTables')

<div class="containereditUser">


    <form action="{{route('admin.usuarios.usuariosupdate', $user)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value={{$user->name}}>
          </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" value={{$user->email}}>
        </div>
     
     <div class="mt-3">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{route ('admin.usuarios.index')}}" class="btn btn-danger">Cancelar</a>
    </div>

      </form>
</div>

@endsection
