<?php

namespace App\Http\Controllers;

use App\Models\TipoMarca;
use Illuminate\Http\Request;

class TipoMarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.camisetas.createmarca');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);

        $marca = TipoMarca::create([
            'nombre' =>$request->nombre,
        ]);


        return redirect()->route('camisetas.index')->with('statusmarca', 'La marca ha sido registrada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(TipoMarca $tipoMarca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoMarca $tipoMarca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoMarca $tipoMarca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoMarca $tipoMarca)
    {
        //
    }
}
