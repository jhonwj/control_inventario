<?php

use App\Http\Controllers\Almacen\AlmacenController;
use App\Http\Controllers\Marca\MarcaController;
use App\Http\Controllers\Modelo\ModeloController;
use App\Http\Controllers\Perfil\PerfilController;
use App\Http\Controllers\Producto\ProductoController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('/perfil', PerfilController::class);
Route::resource('/usuario', UsuarioController::class);
Route::resource('/almacen', AlmacenController::class);
Route::resource('/marca', MarcaController::class);
Route::resource('/modelo', ModeloController::class);
Route::resource('/producto', ProductoController::class);
