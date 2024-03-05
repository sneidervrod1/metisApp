<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Foreach_;
use App\Models\Validation;
use PHPUnit\Framework\Constraint\IsEmpty;

class ValidationController extends Controller
{
    public function mostrar(){
        $registros = Validation::pluck('user');
        
        foreach ($registros as $registro) {
           
            if($registro == Auth::id()){

                return view('model');
            }else{
                return view('validationForm');
            }
        }
        
    }  

    public function recibir(Request $request){

        $percUsabilidad = ( intval($request['pregunta1']) + intval($request['pregunta2']) +  intval($request['pregunta3']) ) / 3; 
        $modeloIngles = (intval($request['pregunta4']) + intval($request['pregunta5']) +  intval($request['pregunta6']) ) / 3;
        $percUtilidad = (intval($request['pregunta7']) + intval($request['pregunta8']) +  intval($request['pregunta9'])+ intval($request['pregunta10']) + intval($request['pregunta11'])) / 5;
        $satisfaccion = (intval($request['pregunta12']) + intval($request['pregunta13']) + intval($request['pregunta14'])+ intval($request['pregunta15'])) /4;
        $total = ($percUtilidad + $modeloIngles + $percUtilidad + $satisfaccion) / 4;
        
        $validacion = new Validation;

        $validacion->user = Auth::id();
        $validacion->percepUsabilidad =  $percUsabilidad;
        $validacion->modeloCompIngles = $modeloIngles;
        $validacion->percepUtilidad = $percUtilidad;
        $validacion->satisfaccionApp = $satisfaccion;
        $validacion->totalAceptacion = $total;

        $validacion->save();

         
        return view('model');
    }  
}
