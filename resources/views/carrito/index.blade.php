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
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if(count($carrito) > 0)
                @foreach($carrito as $id => $details)
                    <tr>
                        <td>{{ $details['nombre'] }}</td>
                        <td>{{ $details['tallenombre'] }}</td>
                        <td>{{ $details['cantidad'] }}</td>
                        <td>{{ number_format($details['precio'], 2, ',', '.') }}</td>
                        <td>{{ number_format($details['cantidad'] * $details['precio'], 2, ',', '.') }}</td>
                        <td>
                            <form action="{{ route('carrito.update', $id) }}" method="POST" class="d-inline">
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
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Tu carrito está vacío</td>
                </tr>
            @endif
        </tbody>

        <tfoot>
            @if($carrito)
            <tr>
                <td colspan="4" class="text-right"><strong>Total:</strong></td>
                <td colspan="2"><strong>${{ number_format($total, 2) }}</strong></td>
            </tr>
            @endif
        </tfoot>

    </table>

    @if($carrito)
    <div class="mb-3">
        <form action="{{ route('carrito.checkout') }}" method="GET">
            @csrf
            <button type="submit" class="btn btn-success">Confirmar Compra</button>
        </form>
    </div>
    @endif
</div>
@endsection
