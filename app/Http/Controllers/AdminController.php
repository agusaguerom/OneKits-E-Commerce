<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $users = User::where('fk_tipo_usuario', 2)->with('domicilio')->get();
        return view('admin.usuarios.admin', [
            'users' => $users
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.usuarios.adminedit', [
            'user' => $user
        ]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
    return redirect()->route('admin.usuarios.admin')->with('status', 'Administrador modificado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
            $user->delete();
            return redirect()->route('admin.usuarios.admin')->with('statusDelete', 'Administrador eliminado Exitosamente');

    }
}
