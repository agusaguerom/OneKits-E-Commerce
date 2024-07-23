<?php

namespace App\Http\Controllers;

use App\Models\Camiseta;
use Illuminate\Http\Request;
use App\Models\TipoMarca;
use App\Models\TipoTalle;
use App\Models\Equipo;



class CamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camisetas = Camiseta::orderBy('fk_equipo')->get();
        return view('admin.camisetas.index', [
            'camisetas' => $camisetas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::orderBy('nombre')->get();
        $tipomarca = TipoMarca::orderBy('nombre')->get();
        $tipotalle = TipoTalle::orderBy('id')->get();

        return view('admin.camisetas.create',[
            'equipos' => $equipos,
            'tipomarca' => $tipomarca,
            'tipotalle' => $tipotalle
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Camiseta $camiseta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camiseta $camiseta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camiseta $camiseta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camiseta $camiseta)
    {
        //
    }
}
