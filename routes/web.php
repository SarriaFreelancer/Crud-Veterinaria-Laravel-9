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
Route::resource('clientes', App\Http\Controllers\ClientesController::class)->middleware('auth');
Route::resource('mascotas', App\Http\Controllers\MascotasController::class)->middleware('auth');
Route::resource('citas', App\Http\Controllers\CitasController::class)->middleware('auth');
Route::resource('calendario', App\Http\Controllers\CalendarioController::class)->middleware('auth');



Auth::routes();

Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
