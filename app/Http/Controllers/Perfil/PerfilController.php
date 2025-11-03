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
    public function update(Request $request, $id)
    {
        $Perfil = Perfil::find(($id));
        $Perfil->update($request->all());
        return $Perfil;
    }

    public function destroy(Request $request, $id)
    {
        $Perfil = Perfil::find(($id));
        $Perfil->delete();
        return 'ok';
    }
}
