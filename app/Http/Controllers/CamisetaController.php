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

        $request->validate([
            'fk_tipo_marca' => 'required',
            'fk_equipo' => 'required',
            'fk_tipo_talle' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'fk_fotos' => 'nullable',
            'Descripcion' => 'nullable',
        ]);

        Camiseta::create([
            'fk_tipo_marca' => $request->fk_tipo_marca,
            'fk_equipo' => $request->fk_equipo,
            'fk_tipo_talle' => $request->fk_tipo_talle,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'fk_fotos' => $request->fk_fotos,
            'Descripcion' => $request->Descripcion,
        ]);

        return redirect()->route('camisetas.index')->with('status', 'La camiseta ha sido creada correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Camiseta $camiseta)
    {
        return view('admin.camisetas.show', [
            'camiseta' => $camiseta

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camiseta $camiseta)
    {

        $equipos = Equipo::orderBy('nombre')->get();
        $tipomarca = TipoMarca::orderBy('nombre')->get();
        $tipotalle = TipoTalle::orderBy('id')->get();

        return view('admin.camisetas.edit', [
            'camiseta' => $camiseta,
            'equipos' => $equipos,
            'tipomarca' => $tipomarca,
            'tipotalle' => $tipotalle
        ]);
    }



    public function update(Request $request, Camiseta $camiseta)
    {



        $request->validate([
            'fk_tipo_marca' =>  'required' ,
            'fk_equipo' => 'required' ,
            'fk_tipo_talle' => 'required' ,
            'dorsal' => 'required' ,
            'precio' => 'required' ,
            'fk_fotos' => 'nullable' ,
            'Descripcion' => 'required',

        ]);

        $camiseta->update([

            'fk_tipo_marca' => $request->fk_tipo_marca,
            'fk_equipo' => $request->fk_equipo,
            'fk_tipo_talle' => $request->fk_tipo_talle,
            'nombre' => $request->dorsal,
            'precio' => $request->precio,
            'fk_fotos' => $request->fk_fotos,
            'Descripcion' => $request->descripcion,

         ]);

         return redirect()
         ->route('camisetas.index')
         ->with('status', 'La camiseta se ha modificado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camiseta $camiseta)
    {
        //
    }
}
