@extends("layouts.tienda")


@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>talle</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($carrito as $id => $details)

                <tr>
                    <td>{{ $details['nombre'] }}</td>
                    <td>{{ $details['talle'] }}</td>
                    <td>{{ $details['cantidad'] }}</td>
                    <td>{{ $details['precio'] }}</td>
                    <td>{{ $details['cantidad'] * $details['precio'] }}</td>
                    <td>
                        <form action="{{ route('carrito.update', $id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="number" name="cantidad" value="{{ $details['cantidad'] }}" min="1">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                        <form action="{{ route('carrito.remove', $id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="5" class="text-center">Tu carrito está vacío</td>
                </tr>

            @endforelse
        </tbody>
    </table>


    @if($carrito)
    <div class="text-right">
        <form action="{{ route('carrito.checkout') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-success">Confirmar Compra</button>
        </form>
    </div>
    @endif
</div>
@endsection
