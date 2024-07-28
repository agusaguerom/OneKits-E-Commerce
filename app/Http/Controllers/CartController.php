<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }


    public function add(Request $request, $id)
    {
        $camiseta = Camiseta::findOrFail($id);
        $talle_id = $request->input('talleelegido');
        $stock = StockCamiseta::where('fk_camiseta', $id)
                              ->where('fk_tipo_talle', $talle_id)
                              ->first();

        if (!$stock) {
            return redirect()->back()->with('error', 'El talle seleccionado no está disponible.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            if ($cart[$id]['quantity'] < $stock->cantidad) {
                $cart[$id]['quantity']++;
            } else {
                return redirect()->back()->with('error', 'No hay suficiente stock.');
            }
        } else {
            $cart[$id] = [
                "name" => $camiseta->nombre,
                "quantity" => 1,
                "price" => $camiseta->precio,
                "image" => $camiseta->image, // Si tienes una imagen asociada
                "stock" => $stock->cantidad,
                "talle" => $talle_id
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Camiseta añadida al carrito!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Camiseta eliminada del carrito!');
    }


}
