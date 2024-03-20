<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\ModeloController;
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
    return view('welcome');
});
/* Routes validation */

Route::get('/validation', [ValidationController::class, 'mostrar'])->name('validation.mostrar');
Route::post('/validation', [ValidationController::class, 'recibir'])->name('validation.recibir');


/* Routes encuestas */

Route::get('/encuesta/nivel', [EncuestaController::class, 'index'])->name('encuesta.index');
Route::post('/encuesta/nivel', [EncuestaController::class, 'pesosCategorias'])->name('encuesta.id');
Route::post('/encuesta', [EncuestaController::class, 'pesosCategoriasActualizar'])->name('encuesta.pesos');

/* Routes AUTH */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
