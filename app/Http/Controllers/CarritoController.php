<?php

namespace App\Http\Controllers;

use App\Models\TalleCalzado;
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
        $total = 0;


        foreach ($carrito as $details) {
            $total += $details['cantidad'] * $details['precio'];
        }

        return view('carrito.index', compact('carrito','total'));
    }



    public function add(Request $request)
    {
        // Determina el tipo de producto y la talla
        if ($request->has('fk_camiseta')) {
            $camiseta = Camiseta::findOrFail($request->fk_camiseta);
            $tipo = 'camiseta';
            $talle = $request->talleelegido;
            $tallenombre = TipoTalle::findOrFail($request->talleelegido)->nombre_talle;

        } elseif ($request->has('fk_botin')) {
            $botin = Botin::findOrFail($request->fk_botin);
            $tipo = 'botin';
            $talle = $request->talleelegido;
            $tallenombre = TalleCalzado::findOrFail($request->talleelegido)->nombre_talle;

        } else {
            return redirect()->route('carrito.index')->with('error', 'Producto no válido.');
        }

        $carrito = session()->get('carrito', []);
        $id = $request->has('fk_camiseta') ? $request->fk_camiseta : $request->fk_botin;
        $nombre = $request->has('fk_camiseta') ? $camiseta->nombre : $botin->nombre;
        $precio = $request->has('fk_camiseta') ? $camiseta->precio : $botin->precio;

        // Añade el producto al carrito o actualiza la cantidad
        if (isset($carrito[$id])) {
            $carrito[$id]['cantidad'] += $request->cantidad;
        } else {
            $carrito[$id] = [
                'nombre' => $nombre,
                'cantidad' => $request->cantidad,
                'precio' => $precio,
                'talle' => $talle,
                'tipo' => $tipo,
                'tallenombre' => $tallenombre,

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
        $total = 0;

        foreach ($carrito as $details) {
            $total += $details['cantidad'] * $details['precio'];
        }

        return view('carrito.checkout', compact('carrito', 'total'));

    }


    public function complete(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para completar la compra');
        }

        $carrito = session()->get('carrito', []);

        // Verificar stock suficiente para cada producto en el carrito
        foreach ($carrito as $id => $details) {
            $stock = null;
            if ($details['tipo'] === 'camiseta') {
                $stock = Stock::where('fk_camiseta', $id)
                    ->where('fk_tipo_talle', $details['talle'])
                    ->first();
            } else {
                $stock = StockCalzado::where('fk_botin', $id)
                    ->where('fk_talle_calzados', $details['talle'])
                    ->first();
            }

            // Depuración: Loguear información del stock
            \Log::info('Checking stock for:', [
                'id' => $id,
                'tipo' => $details['tipo'],
                'talle' => $details['talle'],
                'stock' => $stock,
            ]);

            // Verificar si el stock existe y si hay suficiente cantidad
            if (!$stock) {
                return redirect()->route('carrito.index')->with('error', 'El stock no se encontró para ' . $details['nombre']);
            }
            if ($stock->cantidad < $details['cantidad']) {
                return redirect()->route('carrito.index')->with('error', 'Stock insuficiente para ' . $details['nombre']);
            }
        }

        // Actualizar la cantidad en stock
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

            // Actualizar el stock si existe
            if ($stock) {
                $stock->cantidad -= $details['cantidad'];
                $stock->cantidad = max($stock->cantidad, 0); // Evita cantidades negativas
                $stock->save();
            }
        }

        session()->forget('carrito');
        return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito');
    }










}
