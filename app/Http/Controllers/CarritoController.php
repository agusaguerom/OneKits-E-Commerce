<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito.index', compact('carrito'));
    }

    public function add(Request $request)
    {
        $camiseta = Camiseta::findOrFail($request->fk_camiseta);

        $carrito = session()->get('carrito', []);

        if(isset($carrito[$camiseta->id])) {
            $carrito[$camiseta->id]['cantidad'] += $request->cantidad;
        } else {
            $carrito[$camiseta->id] = [
                "nombre" => $camiseta->nombre,
                "cantidad" => $request->cantidad,
                "precio" => $camiseta->precio
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->route('carrito.index')->with('success', 'Producto añadido al carrito');
    }

    public function update(Request $request, $id)
    {
        $carrito = session()->get('carrito', []);
        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad'] = $request->cantidad;
            session()->put('carrito', $carrito);
        }

        return redirect()->route('carrito.index')->with('success', 'Carrito actualizado');
    }

    public function remove($id)
    {
        $carrito = session()->get('carrito', []);
        if(isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }

        return redirect()->route('carrito.index')->with('success', 'Producto eliminado del carrito');
    }




}
