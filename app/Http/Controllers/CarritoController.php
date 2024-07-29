<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiseta;
use App\Models\Botin;
use App\Models\Stock;
use App\Models\StockCalzado;
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
        if ($request->has('fk_camiseta')) {
            $camiseta = Camiseta::findOrFail($request->fk_camiseta);
            $tipo = 'camiseta';
            $talle = $request->talleelegido;

        } elseif ($request->has('fk_botin')) {
            $botin = Botin::findOrFail($request->fk_botin);
            $tipo = 'botin';
            $talle = $request->talleelegido;

        } else {
            return redirect()->route('carrito.index')->with('error', 'Producto no válido.');
        }

        $carrito = session()->get('carrito', []);

        $id = $request->has('fk_camiseta') ? $request->fk_camiseta : $request->fk_botin;
        $nombre = $request->has('fk_camiseta') ? $camiseta->nombre : $botin->nombre;
        $precio = $request->has('fk_camiseta') ? $camiseta->precio : $botin->precio;

        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad'] += $request->cantidad;
        } else {
            $carrito[$id] = [
                'nombre' => $nombre,
                'cantidad' => $request->cantidad,
                'precio' => $precio,
                'talle' => $talle,
                'tipo' => $tipo,
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
            if ($details['tipo'] === 'camiseta') {
                $stock = Stock::where('fk_camiseta', $id)
                                    ->where('fk_tipo_talle', $details['talle'])
                                    ->first();
            } else {
                $stock = StockCalzado::where('fk_botin', $id)
                                ->where('fk_talle_calzados', $details['talle'])
                                ->first();
            }

            if ($stock) {
                if ($stock->cantidad < $details['cantidad']) {
                    return redirect()->route('carrito.index')->with('error', 'Stock insuficiente para ' . $details['nombre']);
                }
            } else {
                return redirect()->route('carrito.index')->with('error', 'El stock no se encontró para ' . $details['nombre']);
            }
        }

        foreach ($carrito as $id => $details) {
            if ($details['tipo'] === 'camiseta') {
                $stock = Stock::where('fk_camiseta', $id)
                                    ->where('fk_tipo_talle', $details['talle'])
                                    ->first();
            } else {
                $stock = StockCalzado::where('fk_botin', $id)
                                ->where('fk_talle_calzados', $details['talle'])
                                ->first();
            }

            if ($stock) {
                $stock->cantidad -= $details['cantidad'];
                $stock->save();
            }
        }

        session()->forget('carrito');

        return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito');
    }







}
