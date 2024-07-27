<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagenCamiseta;


class ImagenCamisetaController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('imagenes', 'public');

                ImagenCamiseta::create([
                    'url_img' => $path,
                    'fk_camiseta' => $request->fk_camiseta,
                ]);
            }
        }

        return redirect()->route('camisetas.show', $request->fk_camiseta);
    }



}
