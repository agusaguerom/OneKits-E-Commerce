<!--index.blade.php-->


@extends('layouts.users')

@section('contentTables')

<div class="containereditUser">


    <form action="{{route('admin.usuarios.adminupdate', $user)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
          </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>

        
        <div class="form-group">
          <label for="direccion">Direccion</label>
          <input type="text" class="form-control" name="direccion" value="{{$user->domicilio->direccion}}">
        </div>

        <div class="form-group">
          <label for="altura">Altura</label>
          <input type="number" class="form-control" name="altura" value="{{$user->domicilio->altura}}">
        </div>

        <div class="form-group">
          <label for="piso">Piso</label>
          <input type="text" class="form-control" name="piso" value="{{$user->domicilio->piso}}">
        </div>

        <div class="form-group">
          <label for="nroDepto">Departamento</label>
          <input type="text" class="form-control" name="nroDepto" value="{{$user->domicilio->nroDepto}}">
        </div>
     
     <div class="mt-3">
        <button type="submit" class="btn btn-primary">Modificar</button>
        <a href="{{route ('admin.usuarios.admin')}}" class="btn btn-danger">Cancelar</a>
    </div>

      </form>
</div>

@endsection
