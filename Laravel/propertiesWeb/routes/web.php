<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\ExpedientController;
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
    return view('layouts/app');
});

// Route::resource('properties', PropertiesController::class);
Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertiesController::class, 'create'])->name('properties.create');
Route::post('/properties', [PropertiesController::class, 'store'])->name('properties.store');
Route::get('/properties/{property}', [PropertiesController::class, 'show'])->name('properties.show');
Route::get('/properties/{property}/edit', [PropertiesController::class, 'edit'])->name('properties.edit');
Route::put('/properties/{property}', [PropertiesController::class, 'update'])->name('properties.update');
Route::delete('/properties/{property}', [PropertiesController::class, 'destroy'])->name('properties.destroy');
                      
// Route::resource('buyers', BuyersController::class);
Route::get('/buyers', [BuyersController::class, 'index'])->name('buyers.index');
Route::get('/buyers/create', [BuyersController::class, 'create'])->name('buyers.create');
Route::post('/buyers', [BuyersController::class, 'store'])->name('buyers.store');
Route::get('/buyers/{buyers}', [BuyersController::class, 'show'])->name('buyers.show');
Route::get('/buyers/{buyers}/edit', [BuyersController::class, 'edit'])->name('buyers.edit');
Route::put('/buyers/{buyers}', [BuyersController::class, 'update'])->name('buyers.update');
Route::delete('/buyers/{buyers}', [BuyersController::class, 'destroy'])->name('buyers.destroy');

// Route::resource('expedient', ExpedientController::class);
Route::get('/expedients', [ExpedientController::class, 'index'])->name('expedients.index');
Route::get('/expedients/create', [ExpedientController::class, 'create'])->name('expedients.create');
Route::post('/expedients', [ExpedientController::class, 'store'])->name('expedients.store');
Route::get('/expedients/{expedients}', [ExpedientController::class, 'show'])->name('expedients.show');
Route::get('/expedients/{expedients}/edit', [ExpedientController::class, 'edit'])->name('expedients.edit');
Route::put('/expedients/{expedients}', [ExpedientController::class, 'update'])->name('expedients.update');
Route::delete('/expedients/{expedients}', [ExpedientController::class, 'destroy'])->name('expedients.destroy');

// Route::resource('personal', PersonalController::class);
Route::get('/personals', [PersonalController::class, 'index'])->name('personals.index');
Route::get('/personals/create', [PersonalController::class, 'create'])->name('personals.create');
Route::post('/personals', [PersonalController::class, 'store'])->name('personals.store');
Route::get('/personals/{personals}', [PersonalController::class, 'show'])->name('personals.show');
Route::get('/personals/{personals}/edit', [PersonalController::class, 'edit'])->name('personals.edit');
Route::put('/personals/{personals}', [PersonalController::class, 'update'])->name('personals.update');
Route::delete('/personals/{personals}', [PersonalController::class, 'destroy'])->name('personals.destroy');

