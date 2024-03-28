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

Route::get('/garderie/{id}',[GarderieController::class, 'show'])->whereNumber('id')-> name('show');

Route::get('/garderie/create', [GarderieController::class, 'create'])->name('garderies.create');

Route::post('/garderie/create', [GarderieController::class, 'store'])->name('garderies.store');

Route::get('/garderie/{id}/modifier', [GarderieController::class, 'formModifier'])->whereNumber('id')->name('garderies.modifier');

Route::put('/garderie/{id}/update', [GarderieController::class, 'update'])->whereNumber('id')->name('garderies.update');

Route::delete('/garderie/{id}/supprimer', [GarderieController::class, 'supprimer'])->whereNumber('id')->name('garderies.supprimer');

