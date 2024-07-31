<?php

namespace App\Http\Controllers;

use App\Models\Botin;
use App\Models\TipoMarca;
use App\Models\TalleCalzado;
use App\Models\ImagenBotin;
use App\Models\StockCalzado;
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



    public function showtienda(Botin $botin)
    {
        $stocks = $botin->stocks()
            ->join('talle_calzados', 'stock_calzados.fk_talle_calzados', '=', 'talle_calzados.id')
            ->select('stock_calzados.*', 'talle_calzados.nombre_talle')
            ->get();

        $recomendaciones = Botin::where('id', '!=', $botin->id)
            ->limit(4)
            ->get();

        return view('tienda.botinselect', [
            'botin' => $botin,
            'stocks' => $stocks,
            'recomendaciones' => $recomendaciones
        ]);
    }
    public function filtroAdidas()
    {
        $tipoMarcaAdidas = TipoMarca::where('nombre', 'Adidas')->value('id');


        $adidas = Botin::where('fk_tipo_marca', $tipoMarcaAdidas)->get();


        return view('tienda.botinesadidas', [
            'adidasbotin' => $adidas,


        ]);




    }

    public function filtroPuma()
    {
        $tipoMarcaPuma = TipoMarca::where('nombre', 'Puma')->value('id');


        $puma = Botin::where('fk_tipo_marca', $tipoMarcaPuma)->get();


        return view('tienda.botinespuma', [
            'pumabotin' => $puma,

        ]);



    }

    public function filtroNike()
    {
        $tipoMarcaNike = TipoMarca::where('nombre', 'Nike')->value('id');


        $nike = Botin::where('fk_tipo_marca', $tipoMarcaNike)->get();


        return view('tienda.botinesnike', [
            'nikebotin' => $nike,

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
        $stockcalzado = StockCalzado::where('fk_botin', $botin->id)->get();

        return view('admin.botines.show', [
            'botin' => $botin,
            'stockcalzado' => $stockcalzado
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
            'Descripcion' => 'nullable',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $botin->update([

            'fk_tipo_marca' => $request->fk_tipo_marca,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'Descripcion' => $request->Descripcion,
        ]);


        $imagenes = ImagenBotin::where('fk_botin', $botin->id)->get();
        foreach ($imagenes as $imagen) {
            \Storage::disk('public')->delete($imagen->url_img);
            $imagen->delete();
        }


        if ($request->hasFile('imagenes')) {

            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('imagenes', 'public');

                ImagenBotin::create([
                    'url_img' => $path,
                    'fk_botin' => $botin->id,
                ]);
            }
        }


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
