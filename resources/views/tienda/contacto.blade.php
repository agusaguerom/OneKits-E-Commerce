@extends("../layouts.tienda")


@section('content')

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="container">


    <h1 class="titulocontacto">Contacto</h1>
    <p class="parrafocontacto">No dudes en ponerte en contacto ante  cualquier duda o sugerencia</p>

    <form action="{{ route('contactoform') }}" method="POST">
      @csrf
      <div class="form-group formcont">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre">
      </div>
  
      <div class="form-group formcont">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese apellido">
      </div>
  
      <div class="form-group formcont">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Ingrese email">
      </div>
  
      <div class="form-group formcont">
          <label for="telefono">Telefono</label>
          <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono">
      </div>
  
      <div class="form-group formcont">
          <label for="mensaje">Mensaje</label>
          <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Ingrese mensaje"></textarea>
      </div>
  
      <div class="submitdiv">
          <button type="submit" class="btn btn-dark">Enviar</button>
      </div>
  </form>
  


    </div>
@endsection
