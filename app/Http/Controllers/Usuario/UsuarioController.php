<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $usuario = User::get();
        return $usuario;
        // $perfil = DB::
    }
    public function store(Request $request)
    {
        $User = User::create($request->all());
        return $User;
    }
    public function update(Request $request, $id)
    {
        $User = User::find(($id));
        $User->update($request->all());
        return $User;
    }

    public function destroy(Request $request, $id)
    {
        $User = User::find(($id));
        $User->delete();
        return 'ok';
    }
}
