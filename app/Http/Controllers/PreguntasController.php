<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    public function index(){
        return view('Preguntas.preguntas');
    }
    public function recibirDatosInstruccion(){
        return view('Preguntas.instruction');
    }
}


