<?php

namespace App\Http\Controllers;

use App\Models\Botin;
use App\Models\TipoMarca;
use App\Models\TalleCalzado;
use App\Models\ImagenBotin;
use Illuminate\Http\Request;

class BotinController extends Controller
{



    public function index()
    {
        $botines = Botin::orderBy('fk_tipo_marca')->get();
        return view('admin.botines.index', [
            'botines' => $botines
        ]);
    }




    public function create()
    {

        $tipomarca = TipoMarca::orderBy('nombre')->get();
        $tallecalzado = TalleCalzado::orderBy('id')->get();

        return view('admin.botines.create',[
            'tipomarca' => $tipomarca,
            'tallecalzado' => $tallecalzado
        ]);

    }




    public function store(Request $request)
    {
        $request->validate([
            'fk_tipo_marca' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'Descripcion' => 'nullable',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $botin = Botin::create([
            'fk_tipo_marca' => $request->fk_tipo_marca,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'Descripcion' => $request->Descripcion,
        ]);


        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('imagenes', 'public');

                ImagenBotin::create([
                    'url_img' => $path,
                    'fk_botin' => $botin->id,
                ]);
            }
        }

        return redirect()->route('botines.index')->with('status', 'El botin ha sido creado correctamente');
    }




    public function show(Botin $botin)
    {
        return view('admin.botines.show', [
            'botin' => $botin

        ]);
    }



    public function edit(Botin $botin)
    {
        $tipomarca = TipoMarca::orderBy('nombre')->get();
        $tipotalle = TalleCalzado::orderBy('id')->get();

        return view('admin.botines.edit', [
            'botin' =>$botin,
            'tipomarca' => $tipomarca,
            'tipotalle' => $tipotalle
        ]);
    }



    public function update(Request $request, Botin $botin)
    {
        $request->validate([
            'fk_tipo_marca' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'fk_fotos' => 'nullable',
            'Descripcion' => 'nullable',
        ]);

        $botin->update([

            'fk_tipo_marca' => $request->fk_tipo_marca,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'fk_fotos' => $request->fk_fotos,
            'Descripcion' => $request->Descripcion,
        ]);

        return redirect()->route('botines.index')->with('status', 'El botin ha sido Modificado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Botin $botin)
    {
        //
    }
}
