<?php

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

Route::get('/transportista',[\App\Http\Controllers\TransportistaController::class, 'index']);
Route::get('/transportista/{transportista}', [\App\Http\Controllers\TransportistaController::class, 'show']);
Route::get('/transportista/create/transportista', [\App\Http\Controllers\TransportistaController::class, 'create']); 
Route::post('/transportista/create/transportista', [\App\Http\Controllers\TransportistaController::class, 'store']); 
Route::get('/transportista/{transportista}/edit', [\App\Http\Controllers\TransportistaController::class, 'edit']); 
Route::put('/transportista/{transportista}/edit', [\App\Http\Controllers\TransportistaController::class, 'update']); 
Route::delete('/transportista/{transportista}', [\App\Http\Controllers\TransportistaController::class, 'destroy']); 
