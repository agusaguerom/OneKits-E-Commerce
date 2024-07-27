<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('fk_tipo_usuario', 1)->get();
        return view('admin.usuarios.index', [
            'users' => $users
        ]);
    }

    public function edit(User $user)
    {

        return view('admin.usuarios.usuariosedit', [
            'user' => $user
        ]);    
    
    }

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
    return redirect()->route('admin.usuarios.index')->with('status', 'Usuario modificado Exitosamente');
    }

    public function destroy(User $user)
    {
            $user->delete();
            return redirect()->route('admin.usuarios.index')->with('statusDelete', 'Usuario eliminado Exitosamente');

    }

}
