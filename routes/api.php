<?php

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

Route::apiResource('estados', 'App\Http\Controllers\Api\EstadoController');
Route::apiResource('tipo_produtos', 'App\Http\Controllers\Api\TipoProdutosController');
Route::apiResource('produtos', 'App\Http\Controllers\Api\ProdutosController');
Route::apiResource('altera_quantidade_produtos', 'App\Http\Controllers\Api\AlteraQuantidadeController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
