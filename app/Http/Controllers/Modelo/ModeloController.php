<?php

namespace App\Http\Controllers\Modelo;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index(Request $request)
    {
        $Modelo = Modelo::get();
        return $Modelo;
        // $perfil = DB::
    }
    public function store(Request $request)
    {
        $Modelo = Modelo::create($request->all());
        return $Modelo;
    }
}
