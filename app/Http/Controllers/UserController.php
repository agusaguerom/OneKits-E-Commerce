<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use App\Models\Tipo_usuario;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('fk_tipo_usuario', 1)->with('domicilio')->get();
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'direccion' => 'required|string|max:255',
            'altura' => 'required|numeric|min:0',
            'piso' => 'nullable|string|max:50',
            'nroDepto' => 'nullable|string|max:50',
        ],[
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección válida.',
            'email.unique' => 'Este correo electrónico ya está en uso.',
            'direccion.required' => 'La dirección es obligatoria.',
            'direccion.string' => 'La dirección debe ser una cadena de texto.',
            'direccion.max' => 'La dirección no puede tener más de 255 caracteres.',
            'altura.numeric' => 'La altura debe ser un número.',
            'altura.min' => 'La altura no puede ser menor a 0.',
            'piso.string' => 'El piso debe ser una cadena de texto.',
            'piso.max' => 'El piso no puede tener más de 50 caracteres.',
            'nroDepto.string' => 'El departamento debe ser una cadena de texto.',
            'nroDepto.max' => 'El departamento no puede tener más de 50 caracteres.',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $user->domicilio->update([
            'direccion' => $request->direccion,
            'altura' => $request->altura,
            'piso' => $request->piso,
            'departamento' => $request->departamento,
        ]);

    return redirect()->route('admin.usuarios.index')->with('status', 'Usuario modificado Exitosamente');
    }



    public function create()
    {
        $domicilio = Domicilio::orderBy("direccion")->get();
        $tipousuario = Tipo_usuario::orderBy("tipo_usuario")->get();

        return view('admin.usuarios.create',[
            'domicilio' => $domicilio,
            'tipousuario' => $tipousuario,
        ]);
    }
    public function destroy(User $user)
    {
            $user->delete();
            return redirect()->route('admin.usuarios.index')->with('statusDelete', 'Usuario eliminado Exitosamente');

    }

}
