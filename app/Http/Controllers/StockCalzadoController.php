<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalleCalzado;
use App\Models\StockCalzado;
use App\Models\Botin;



class StockCalzadoController extends Controller
{

    public function create(Botin $botin)
    {
        $tallecalzado = TalleCalzado::all();
        return view('admin.stockCalzado.create', [
            'botin' => $botin,
            'tallecalzado' => $tallecalzado
        ]);
    }


    public function store(Request $request, Botin $botin)
    {

        $request->validate([
            'fk_talle_calzados' => 'required|exists:talle_calzados,id',
            'cantidad' => 'required|integer|min:1'

        ]);

        $stockcalzado = StockCalzado::where('fk_botin', $botin->id)
                       ->where('fk_talle_calzados', $request->fk_talle_calzados)
                       ->first();

        if ($stockcalzado) {
            $stockcalzado->cantidad += $request->cantidad;
            $stockcalzado->save();

        } else {
            StockCalzado::create([
                'fk_botin' => $botin->id,
                'fk_talle_calzados' => $request->fk_talle_calzados,
                'cantidad' => $request->cantidad
            ]);
        }


        return redirect()->route('botines.show', $botin)->with('status', 'Stock actualizado correctamente');
    }






}
