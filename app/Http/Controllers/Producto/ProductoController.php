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
    }

    public function store(Request $request)
    {
        $Producto = Producto::create($request->all());
        return $Producto;
    }
    
    public function update(Request $request, $id)
    {
        $Producto = Producto::find(($id));
        $Producto->update($request->all());
        return $Producto;
    }
    
    public function destroy(Request $request, $id)
    {
        $Producto = Producto::find(($id));
        $Producto->delete();
        return 'ok';
    }
}
