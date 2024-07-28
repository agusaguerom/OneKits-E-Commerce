<?php

namespace App\Http\Controllers;

use App\Models\Camiseta;
use Illuminate\Http\Request;
use App\Models\TipoMarca;
use App\Models\TipoTalle;
use App\Models\Equipo;
use App\Models\ImagenCamiseta;




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
   public function indexTienda()
    {
        $camisetas = Camiseta::orderBy('fk_equipo')->get();
        return view('tienda.productos', [
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

        return view('admin.camisetas.create',[
            'equipos' => $equipos,
            'tipomarca' => $tipomarca,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

    $request->validate([
        'fk_tipo_marca' => 'required',
        'fk_equipo' => 'required',
        'nombre' => 'required',
        'precio' => 'required',
        'Descripcion' => 'nullable',
        'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);


    $camiseta = Camiseta::create([
        'fk_tipo_marca' => $request->fk_tipo_marca,
        'fk_equipo' => $request->fk_equipo,
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'Descripcion' => $request->Descripcion,
    ]);


    if ($request->hasFile('imagenes')) {
        foreach ($request->file('imagenes') as $imagen) {
            $path = $imagen->store('imagenes', 'public');

            ImagenCamiseta::create([
                'url_img' => $path,
                'fk_camiseta' => $camiseta->id,
            ]);
        }
    }

    return redirect()->route('camisetas.index')->with('status', 'La camiseta ha sido creada correctamente');
}

    /**
     * Display the specified resource.
     */

    public function show(Camiseta $camiseta)
    {
        $stocks = $camiseta->stocks()
        ->join('tipo_talles', 'stocks.fk_tipo_talle', '=', 'tipo_talles.id')
        ->select('stocks.*', 'tipo_talles.nombre_talle')
        ->get();


        return view('admin.camisetas.show', [
            'camiseta' => $camiseta,
            'stocks' => $stocks
        ]);
    }


    public function showtienda(Camiseta $camiseta)
    {
    // Define el orden de los talles
    $ordenTalles = [
        'S' => 1,
        'M' => 2,
        'L' => 3,
        'XL' => 4,
        'XXL' => 5,
        'XXXL'=>6
        // Añade más talles si es necesario
    ];

    // Obtén los stocks con talles
    $stocks = $camiseta->stocks()
        ->join('tipo_talles', 'stocks.fk_tipo_talle', '=', 'tipo_talles.id')
        ->select('stocks.*', 'tipo_talles.nombre_talle')
        ->get()
        ->sort(function ($a, $b) use ($ordenTalles) {
            // Ordena usando el arreglo de talles
            $ordenA = $ordenTalles[$a->nombre_talle] ?? 999; // Usa un valor alto para talles no definidos
            $ordenB = $ordenTalles[$b->nombre_talle] ?? 999;
            return $ordenA <=> $ordenB;
        });

    // Recomendaciones
    $recomendaciones = Camiseta::where('id', '!=', $camiseta->id)
        ->limit(4)
        ->get();

    return view('tienda.camisetaselect', [
        'camiseta' => $camiseta,
        'stocks' => $stocks,
        'recomendaciones' => $recomendaciones
    ]);


    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camiseta $camiseta)
    {

        $equipos = Equipo::orderBy('nombre')->get();
        $tipomarca = TipoMarca::orderBy('nombre')->get();

        return view('admin.camisetas.edit', [
            'camiseta' => $camiseta,
            'equipos' => $equipos,
            'tipomarca' => $tipomarca,
        ]);
    }



    public function update(Request $request, Camiseta $camiseta)
    {


        $request->validate([
            'fk_tipo_marca' => 'required',
            'fk_equipo' => 'required',
            'nombre' => 'required',
            'precio' => 'required',
            'Descripcion' => 'nullable',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);

        $camiseta->update([

            'fk_tipo_marca' => $request->fk_tipo_marca,
            'fk_equipo' => $request->fk_equipo,
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'Descripcion' => $request->descripcion,

         ]);


         $imagenes = ImagenCamiseta::where('fk_camiseta', $camiseta->id)->get();
         foreach ($imagenes as $imagen) {
             \Storage::disk('public')->delete($imagen->url_img);
             $imagen->delete();
         }

         if ($request->hasFile('imagenes')) {

            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('imagenes', 'public');

                ImagenCamiseta::create([
                    'url_img' => $path,
                    'fk_camiseta' => $camiseta->id,
                ]);
            }
        }

        return redirect()->route('camisetas.index')->with('status', 'La camiseta ha sido modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camiseta $camiseta)
    {

        $camiseta->delete();

        return redirect()->route('camisetas.index')->with('status', 'La camiseta ha sido eliminada correctamente');
    }
}
