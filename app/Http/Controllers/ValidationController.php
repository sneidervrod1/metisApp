<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Validation;
use App\Models\User;
use PhpParser\Node\Stmt\Foreach_;

class ValidationController extends Controller
{
    public function mostrar()
    {
        $existeValidacion = Validation::where('user', Auth::id())->exists();

        if ($existeValidacion) {
            
            $validacionVista = Validation::all();
            $idsValidacion = Validation::pluck('user');
            
            foreach ($idsValidacion as $userId) {
                // Utiliza Eloquent para obtener el usuario por su ID
                $user = User::find($userId);
            
                if ($user) {
                    // Accede al nombre del usuario y agrégalo al array
                    $nombresUsuarios[] = $user->name;
                    $correoUsuarios[] = $user->email;
                }
            }
            for ($i = 0; $i < count($validacionVista); $i++) {
                $validacionVista[$i]["email"] = $correoUsuarios[$i];
                $validacionVista[$i]["nombre"] = $nombresUsuarios[$i];
            }
          
            
            return view('validations.validationRealized', ['validations' => $validacionVista,]);
        
        } else {
            return view('validations.validationForm');
        }
    }

    public function recibir(Request $request)
    {
        $percUsabilidad = ( intval($request['pregunta1']) + intval($request['pregunta2']) + intval($request['pregunta3']) ) / 3; 
        $modeloIngles = (intval($request['pregunta4']) + intval($request['pregunta5']) + intval($request['pregunta6']) ) / 3;
        $percUtilidad = (intval($request['pregunta7']) + intval($request['pregunta8']) + intval($request['pregunta9'])+ intval($request['pregunta10']) + intval($request['pregunta11'])) / 5;
        $satisfaccion = (intval($request['pregunta12']) + intval($request['pregunta13']) + intval($request['pregunta14'])+ intval($request['pregunta15'])) /4;
        $total = ($percUtilidad + $modeloIngles + $percUtilidad + $satisfaccion) / 4;

        $validacion = new Validation;
        $validacion->user = Auth::id();
        $validacion->percepUsabilidad = $percUsabilidad;
        $validacion->modeloCompIngles = $modeloIngles;
        $validacion->percepUtilidad = $percUtilidad;
        $validacion->satisfaccionApp = $satisfaccion;
        $validacion->totalAceptacion = $total;

        $validacion->save();

        return redirect()->route('validation.mostrar');


        
    }
}