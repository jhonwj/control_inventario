<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $Producto = Producto::get();
        return $Producto;
        // $perfil = DB::
    }

    public function store(Request $request)
    {
        $Producto = Producto::create($request->all());
        return $Producto;
    }
}
