<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoTalle;
use App\Models\Camiseta;
use App\Models\Stock;


class StockController extends Controller
{
    public function create(Camiseta $camiseta)
    {
        $tipotalle = TipoTalle::all();

        return view('admin.stocks.create', [
            'camiseta' => $camiseta,
            'tipotalle' => $tipotalle
        ]);
    }



    public function store(Request $request, Camiseta $camiseta)
    {
        $request->validate([
            'fk_tipo_talle' => 'required|exists:tipo_talles,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $stock = Stock::where('fk_camiseta', $camiseta->id)
                       ->where('fk_tipo_talle', $request->fk_tipo_talle)
                       ->first();

        if ($stock) {

            $stock->cantidad += $request->cantidad;
            $stock->save();
        } else {

            Stock::create([
                'fk_camiseta' => $camiseta->id,
                'fk_tipo_talle' => $request->fk_tipo_talle,
                'cantidad' => $request->cantidad
            ]);
        }

        return redirect()->route('camisetas.show', $camiseta)->with('status', 'Stock actualizado correctamente');
    }





}
