<?php

namespace App\Http\Controllers\Marca;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(Request $request)
    {
        $Marca = Marca::get();
        return $Marca;
        // $perfil = DB::
    }
    public function store(Request $request)
    {
        $Marca = Marca::create($request->all());
        return $Marca;
    }
}
