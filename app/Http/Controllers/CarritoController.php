<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiseta;
use App\Models\Stock;
use App\Models\TipoTalle;


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

        $talle = $request->talleelegido;

        $carrito = session()->get('carrito', []);

        if (isset($carrito[$camiseta->id])) {

            $carrito[$camiseta->id]['cantidad'] += $request->cantidad;
        } else {

            $carrito[$camiseta->id] = [
                'nombre' => $camiseta->nombre,
                'cantidad' => $request->cantidad,
                'precio' => $camiseta->precio,
                'talle' => $talle,

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


    public function checkout()
    {
        $carrito = session()->get('carrito', []);


        return view('carrito.checkout', compact('carrito'));

    }


    public function complete(Request $request)
{

    if (!auth()->check()) {
        return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para completar la compra');
    }

    $carrito = session()->get('carrito', []);

    foreach ($carrito as $id => $details) {
        $stock = Stock::find($details['talle']);

        if ($stock) {
            if ($stock->cantidad < $details['cantidad']) {
                return redirect()->route('carrito.index')->with('error', 'Stock insuficiente para ' . $details['nombre']);
            }
        } else {
            return redirect()->route('carrito.index')->with('error', 'El stock no se encontró para ' . $details['nombre']);
        }
    }

    foreach ($carrito as $id => $details) {
        $stock = Stock::find($details['talle']);
        $stock->cantidad -= $details['cantidad'];
        $stock->save();
    }

    session()->forget('carrito');

    return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito');
}




}
