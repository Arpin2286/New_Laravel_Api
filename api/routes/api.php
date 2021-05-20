<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputsApiController;

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

Route::get('/barang', [InputsApiController::class,'index'] );
//Route::get('/barang/create', [InputsApiController::class,'create'] );
Route::post('/barang', [InputsApiController::class,'store'] );
//Route::get('/barang/{id}', [InputsApiController::class, 'show']);
Route::put('/barang/{id}', [InputsApiController::class, 'update']);
Route::delete('/barang/{id}', [InputsApiController::class, 'destroy']);
