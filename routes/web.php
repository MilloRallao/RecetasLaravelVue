<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\RecetasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/getDataCategorias', [CategoriaController::class, 'getData']);
Route::get('/getDataIngredientes', [IngredienteController::class, 'getData']);
Route::get('/getDataRecetas', [RecetasController::class, 'getData']);
Route::post('/postDataCreateReceta', [RecetasController::class, 'store']);
Route::delete('/deleteReceta/{receta}', [RecetasController::class, 'destroy']);
