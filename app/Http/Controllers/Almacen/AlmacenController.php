<?php

namespace App\Http\Controllers\Almacen;

use App\Http\Controllers\Controller;
use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index(Request $request)
    {
        $Almacen = Almacen::get();
        return $Almacen;
        // $perfil = DB::
    }
    public function store(Request $request)
    {
        $Almacen = Almacen::create($request->all());
        return $Almacen;
    }

    public function update(Request $request, $id)
    {
        $Almacen = Almacen::find(($id));
        $Almacen->update($request->all());
        return $Almacen;
    }

    public function destroy(Request $request, $id)
    {
        $Almacen = Almacen::find(($id));
        $Almacen->delete();
        return 'ok';
    }
}
