<?php

namespace App\Http\Controllers;

use App\Models\Camiseta;
use Illuminate\Http\Request;

class CamisetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Aca van las camisetas';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
