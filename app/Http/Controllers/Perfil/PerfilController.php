<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfil;
use DB;

class PerfilController extends Controller
{
    public function index(Request $request)
    {
        $perfil = Perfil::get();
        return $perfil;
        // $perfil = DB::
    }
     public function store(Request $request)
    {
        $Perfil = Perfil::create($request->all());
        return $Perfil;
    }
}
