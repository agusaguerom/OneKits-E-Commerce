@extends("layouts.tienda")

@section('content')
<div class="container confirmacion-container">
    <h1 class="confirmacion-title">Confirmar Compra</h1>

    <table class="table confirmacion-table">
        <thead>
            <tr>
                <th class="table-header">Producto</th>
                <th class="table-header">Cantidad</th>
                <th class="table-header">Precio</th>
                <th class="table-header">Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse($carrito as $id => $details)
                <tr class="confirmacion-item">
                    <td class="item-name">{{ $details['nombre'] }}</td>
                    <td class="item-quantity">{{ $details['cantidad'] }}</td>
                    <td class="item-price">{{ $details['precio'] }}</td>
                    <td class="item-total">{{ $details['cantidad'] * $details['precio'] }}</td>
                </tr>
            @empty
                <tr class="empty-cart">
                    <td colspan="4" class="text-center">Tu carrito está vacío</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="confirmacion-button-container text-right">
        <form action="{{ route('carrito.complete') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success confirmacion-btn">Confirmar Pedido</button>
        </form>
    </div>
</div>
@endsection
