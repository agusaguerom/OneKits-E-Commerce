@extends("../layout")


@section('content')

    <div class="container">
    
    
    
    <h1 class="titulocontacto">Contacto</h1>
    <p class="parrafocontacto">No dudes en ponerte en contacto ante  cualquier duda o sugerencia</p>

    <form action="/contacto">
      @csrf
    <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre"  placeholder="Ingrese nombre">
  </div>

  <div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese email">
  </div>

  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="number" class="form-control" id="telefono" placeholder="Ingrese telefono">
  </div>

  <div class="form-group">
    <label for="mensaje">Mensaje</label>
    <textarea name="mensaje"  class="form-control" id="mensaje" placeholder="Ingrese mensaje"></textarea>
  </div>

  <div class="submitdiv">
  <button type="submit" class="btn btn-dark">Enviar</button>
  </div>
</form>


    </div>
@endsection
