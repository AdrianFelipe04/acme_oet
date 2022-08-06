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
    return view('auth.login');
});

Auth::routes();

Route::resource('tipopersonas', App\Http\Controllers\TipopersonaController::class)->middleware('auth');
Route::resource('personas', App\Http\Controllers\PersonaController::class)->middleware('auth');
Route::resource('marcas', App\Http\Controllers\MarcaController::class)->middleware('auth');
Route::resource('colores', App\Http\Controllers\ColoreController::class)->middleware('auth');
Route::resource('tipovehiculos', App\Http\Controllers\TipovehiculoController::class)->middleware('auth');
Route::resource('vehiculos', App\Http\Controllers\VehiculoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
