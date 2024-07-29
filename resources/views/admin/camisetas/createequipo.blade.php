@extends("layouts.admin")

@section('content')

<div class="container containeragregarmarca">
<form action="{{route ('equipos.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre de Equipo</label>
      <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name='nombre' placeholder="Ingrese Equipo">
      <small id="nombre" class="form-text text-muted">Coloca el nombre del Equipo.</small>
    </div>

    <button class="btn btn-success btnagregarmarca">Agregar</button>

</form>
</div>
@endsection