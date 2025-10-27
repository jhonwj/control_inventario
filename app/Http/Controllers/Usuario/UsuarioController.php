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
}
