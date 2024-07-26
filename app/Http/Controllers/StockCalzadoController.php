<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TalleCalzado;
use App\Models\StockCalzado;


class StockCalzadoController extends Controller
{

    public function create(Camiseta $camiseta)
    {
        $tallecalzado = TalleCalzado::all();

        return view('admin.stockCalzado.create', [
            'camiseta' => $camiseta,
            'tallecalzado' => $tallecalzado
        ]);
    }







}
