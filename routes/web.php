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

Route::get('/garderie/{idGarderie}',[GarderieController::class, 'show'])->whereNumber('idGarderie')-> name('show');

Route::get('/garderie/create', [GarderieController::class, 'create'])->name('garderies.create');

Route::post('/garderie/create', [GarderieController::class, 'store'])->name('garderies.store');

Route::get('/garderie/{idGarderie}/modifier', [GarderieController::class, 'formModifier'])->whereNumber('idGarderie')->name('garderies.modifier');

Route::put('/garderie/{idGarderie}/update', [GarderieController::class, 'update'])->whereNumber('idGarderie')->name('garderies.update');

Route::delete('/garderie/{idGarderie}/supprimer', [GarderieController::class, 'supprimer'])->whereNumber('idGarderie')->name('garderies.supprimer');

