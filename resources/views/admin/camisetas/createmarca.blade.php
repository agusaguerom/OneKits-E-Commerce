@extends("layouts.admin")

@section('content')

<div class="container containeragregarmarca">
<form action="{{route ('marcas.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre de Marca</label>
      <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" name='nombre' placeholder="Ingrese Marca">
      <small id="nombre" class="form-text text-muted">Coloca el nombre de la Marca.</small>
    </div>

    <button class="btn btn-success btnagregarmarca">Agregar</button>

</form>
</div>
@endsection