<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\PreguntasController;

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
Route::get('/encuesta', [EncuestaController::class, 'index'])->name('encuesta.index');
Route::get('/encuesta/pesoNivel/{nivel}', [EncuestaController::class, 'peso'])->name('encuesta.pesoCategoria');
Route::put('/encuesta/actualizar/{nivel}', [EncuestaController::class, 'actualizar'])->name('encuesta.actualizar');


/* Routes preguntas */
Route::get('/questions', [PreguntasController::class, 'index'])->name('Preguntas.preguntas');
Route::get('/enunciado', [PreguntasController::class, 'recibirDatosInstruccion'])->name('Preguntas.recibirDatos');


/* Routes modelo */
Route::get('/modelo', [ModeloController::class, 'mostrarmodelo'])->name('modelo.mostrarmodelo');


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
