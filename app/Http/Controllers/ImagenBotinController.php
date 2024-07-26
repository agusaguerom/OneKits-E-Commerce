<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImagenBotin;


class ImagenBotinController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $path = $imagen->store('imagenes', 'public');

                ImagenBotin::create([
                    'url_img' => $path,
                    'fk_botin' => $request->fk_botin,
                ]);
            }
        }

        return redirect()->route('botines.show', $request->fk_botin);
    }

}
