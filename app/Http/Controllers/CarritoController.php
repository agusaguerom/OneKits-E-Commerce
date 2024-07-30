<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiseta;
use App\Models\Botin;
use App\Models\Stock;
use App\Models\StockCalzado;
use App\Models\TipoTalle;
use App\Models\TalleCalzado;




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

        $tipoProducto = $request->input('tipo_producto');

        if($tipoProducto == 'camiseta'){
            $producto = Camiseta::findOrFail($request->fk_camiseta);

        }elseif($tipoProducto == 'botin'){
            $producto = Botin::findOrFail($request->fk_botin);

        }else{
            return redirect()->route('carrito.index')->with('error', 'Tipo de producto no válido');
        }


        $talle = $request->talleelegido;
        $carrito = session()->get('carrito', []);



        if (isset($carrito[$producto->id])) {
            $carrito[$producto->id]['cantidad'] += $request->cantidad;
        } else {
            $carrito[$producto->id] = [
                'nombre' => $producto->nombre,
                'cantidad' => $request->cantidad,
                'precio' => $producto->precio,
                'talle' => $talle,
                'tipo' => $tipoProducto
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->route('carrito.index')->with('success', 'Producto añadido al carrito');
    }





    public function complete(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para completar la compra');
        }

        $carrito = session()->get('carrito', []);

        foreach ($carrito as $id => $details) {
            if ($details['tipo'] == 'camiseta') {
                $stock = Stock::find($details['talle']);
                if ($stock) {
                    $tipoTalle = $stock->tipoTalle;
                    $details['nombre_talle'] = $tipoTalle ? $tipoTalle->nombre : 'N/A';
                    if ($stock->cantidad < $details['cantidad']) {
                        return redirect()->route('carrito.index')->with('error', 'Stock insuficiente para ' . $details['nombre']);
                    }
                } else {
                    return redirect()->route('carrito.index')->with('error', 'El stock no se encontró para ' . $details['nombre']);
                }
            } elseif ($details['tipo'] == 'botin') {
                $stock = StockCalzado::find($details['talle']);
                if ($stock) {
                    $talleCalzado = $stock->talleCalzado;
                    $details['nombre_talle'] = $talleCalzado ? $talleCalzado->nombre : 'N/A';
                    if ($stock->cantidad < $details['cantidad']) {
                        return redirect()->route('carrito.index')->with('error', 'Stock insuficiente para ' . $details['nombre']);
                    }
                } else {
                    return redirect()->route('carrito.index')->with('error', 'El stock no se encontró para ' . $details['nombre']);
                }
            } else {
                return redirect()->route('carrito.index')->with('error', 'Tipo de producto no válido');
            }

            $total += $details['cantidad'] * $details['precio'];
        }

        // Actualizar stock y limpiar carrito
        foreach ($carrito as $id => $details) {
            if ($details['tipo'] == 'camiseta') {
                $stock = Stock::find($details['talle']);
                if ($stock) {
                    $stock->cantidad -= $details['cantidad'];
                    $stock->save();
                }
            } elseif ($details['tipo'] == 'botin') {
                $stock = StockCalzado::find($details['talle']);
                if ($stock) {
                    $stock->cantidad -= $details['cantidad'];
                    $stock->save();
                }
            }
        }

        session()->forget('carrito');

        return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito');
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














}
