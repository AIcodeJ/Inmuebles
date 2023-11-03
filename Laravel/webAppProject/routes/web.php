<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropiedadInmobiliariaController;
use App\Http\Controllers\CompradorPotencialController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\PersonalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Rutas para las Propiedades Inmobiliarias
Route::resource('propiedades', PropiedadInmobiliariaController::class)->except(['index']);
Route::get('propiedades', [PropiedadInmobiliariaController::class, 'index'])->name('propiedades.index');



// Rutas para Compradores Potenciales
Route::resource('compradores', CompradorPotencialController::class)->except(['index']);
Route::get('compradores', [CompradorPotencialController::class, 'index'])->name('compradores.index');

// Rutas del recurso Expediente
Route::resource('expediente', ExpedienteController::class)->names([
    'index' => 'expediente.index',
    'show' => 'expediente.show',
    'edit' => 'expediente.edit',
    'create' => 'expediente.create',
]);
Route::put('/expedientes/{id}', 'ExpedienteController@update')->name('expedientes.update');
Route::resource('expedientes', 'ExpedienteController');



// Rutas para el Personal
Route::resource('personal', PersonalController::class)->except(['index']);
Route::get('personal', [PersonalController::class, 'index'])->name('personal.index');

