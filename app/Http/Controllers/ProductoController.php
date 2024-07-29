<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camiseta;
use App\Models\Botin;

class ProductoController extends Controller
{
    public function index()
    {

        $camisetas = Camiseta::orderBy('fk_tipo_marca')->get();
        $botines = Botin::orderBy('fk_tipo_marca')->get();


        return view('tienda.productos', [
            'camisetas' => $camisetas,
            'botines' => $botines
        ]);
    }



}
