<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputsController;

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

Route::get('/barang', [InputsController::class,'index'] );

Route::get('/barang/create', [InputsController::class,'create'] );

Route::post('/barang', [InputsController::class,'store'] );

Route::get('/barang/{id}/edit', [InputsController::class, 'edit']);
Route::put('/barang/{id}', [InputsController::class, 'update']);

Route::delete('/barang/{id}', [InputsController::class, 'destroy']);