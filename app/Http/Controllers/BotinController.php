<?php

namespace App\Http\Controllers;

use App\Models\Botin;
use App\Models\TipoMarca;
use App\Models\TalleCalzado;
use Illuminate\Http\Request;

class BotinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $botines = Botin::orderBy('fk_tipo_marca')->get();


        return view('admin.botines.index', [
            'botines' => $botines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $tipomarca = TipoMarca::orderBy('nombre')->get();
        $tallecalzado = TalleCalzado::orderBy('id')->get();

        return view('admin.botines.create',[
            'tipomarca' => $tipomarca,
            'tallecalzado' => $tallecalzado
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fk_tipo_marca' => 'required',
            'fk_talle_calzado' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'fk_fotos' => 'nullable',
            'Descripcion' => 'nullable',
        ]);

        Botin::create([
            'fk_tipo_marca' => $request->fk_tipo_marca,
            'fk_talle_calzado' => $request->fk_talle_calzado,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'fk_fotos' => $request->fk_fotos,
            'Descripcion' => $request->Descripcion,
        ]);

        return redirect()->route('botines.index')->with('status', 'El botin ha sido creado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Botin $botin)
    {
        return view('admin.botines.show', [
            'botin' => $botin

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Botin $botin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Botin $botin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Botin $botin)
    {
        //
    }
}
