<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BodegasController;
use App\Http\Controllers\DispositivosController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
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

Route::resource('/marca',MarcasController::class);

Route::resource('/modelos',ModelosController::class);

Route::resource('/bodegas',BodegasController::class);


Route::controller(DispositivosController::class)->group(function (){
    Route::get('/dispositivos','index');
    Route::post('/dispositivo','store');
    Route::get('/dispositivo/{id}','show');
    Route::post('/dispositivo/{id}','update');
    Route::delete('/dispositivo/{id}','destroy');
});

