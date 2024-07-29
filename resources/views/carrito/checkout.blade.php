@extends("layouts.tienda")

@section('content')
<div class="container confirmacion-container">
    <h1 class="confirmacion-title">Confirmacion de Datos</h1>

    @auth
        <div class="user-info-container">
            <div class="user-info">
                <h3 class="user-info-title">Datos del Usuario</h3>
                <p class="user-info-item"><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                <p class="user-info-item"><strong>Email:</strong> {{ auth()->user()->email }}</p>
            </div>

            @if(auth()->user()->domicilio)
                <div class="user-address">
                    <h3 class="user-address-title">Dirección de Envío</h3>
                    <p class="user-address-item"><strong>Dirección:</strong> {{ auth()->user()->domicilio->direccion }}</p>
                    <p class="user-address-item"><strong>Altura:</strong> {{ auth()->user()->domicilio->altura }}</p>
                    <p class="user-address-item"><strong>Piso:</strong> {{ auth()->user()->domicilio->piso }}</p>
                    <p class="user-address-item"><strong>Nro Depto:</strong> {{ auth()->user()->domicilio->nroDepto }}</p>
                </div>
            @else
                <p class="no-address">No se ha proporcionado una dirección de envío.</p>
            @endif
        </div>
    @endauth

    <table class="table confirmacion-table">
        <thead>
            <tr class="table-header-row">
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
        <form action="{{ route('carrito.complete') }}" method="POST" class="confirmacion-form">
            @csrf
            <button type="submit" class="btn btn-success confirmacion-btn">Confirmar Compra</button>
        </form>
    </div>
</div>
@endsection
