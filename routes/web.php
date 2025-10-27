<?php

use App\Http\Controllers\Almacen\AlmacenController;
use App\Http\Controllers\Marca\MarcaController;
use App\Http\Controllers\Modelo\ModeloController;
use App\Http\Controllers\Perfil\PerfilController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Models\Perfil;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', [PerfilController::class, 'index']);
Route::get('/usuario', [UsuarioController::class, 'index']);
Route::get('/almacen', [AlmacenController::class, 'index']);
Route::get('/marca', [MarcaController::class, 'index']);
Route::get('/modelo', [ModeloController::class, 'index']);
