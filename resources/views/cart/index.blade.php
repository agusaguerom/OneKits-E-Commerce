@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cart as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td>${{ $item['quantity'] * $item['price'] }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tu carrito está vacío.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="text-right">
        <h3>Total: ${{ array_sum(array_column($cart, 'price')) }}</h3>
    </div>
</div>
@endsection
