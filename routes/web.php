<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GarderieController;

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


Route::get('/', [GarderieController::class, 'index'])->name('welcome');

Route::get('/Garderies', [GarderieController::class, 'index'])->name('welcome');

Route::post('/garderies/ajouter', [GarderieController::class, 'ajouter'])->name('garderies.ajouter');

Route::get('/garderies/{id}/edit', [GarderieController::class, 'formulaireModifierGarderie'])->whereNumber('id')->name('garderies.edit');

Route::put('/garderies/{id}/update', [GarderieController::class, 'update'])->whereNumber('id')->name('garderies.update');

Route::delete('/garderies/{id}/delete', [GarderieController::class, 'delete'])->whereNumber('id')->name('garderies.delete');

Route::delete('/garderies/clear', [GarderieController::class, 'vider'])->name('garderies.clear');

