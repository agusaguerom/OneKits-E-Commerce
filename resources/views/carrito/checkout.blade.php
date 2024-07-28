@extends("layouts.tienda")

@section('content')
<div class="container">
    <h1>Confirmar Compra</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($carrito as $id => $details)
                <tr>
                    <td>{{ $details['nombre'] }}</td>
                    <td>{{ $details['cantidad'] }}</td>
                    <td>{{ $details['precio'] }}</td>
                    <td>{{ $details['cantidad'] * $details['precio'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Tu carrito está vacío</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="text-right">
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Confirmar Pedido</button>
        </form>
    </div>
</div>
@endsection
