<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Level;

class EncuestaController extends Controller
{
    public function index(): View
    {
        $niveles = Level::all();
        return view('encuestas.niveles.datos', compact('niveles'));
    }

    public function peso(Level $nivel)
    {

        return view('encuestas.niveles.formPesos', compact('nivel'));
    }
    public function actualizar(Request $request, Level $nivel)
    {

        $datosFormulario = $request->except('_token', '_method');
        $suma = array_sum($datosFormulario);

      
        
        if ($suma == 100) {
            // Obtener los datos existentes de la base de datos
            

            foreach ($datosFormulario as $key => $dato) {
              
                $nivel->categories()->updateExistingPivot($key, [
                     'weight_category' => $dato,    
                ]);
            }
            return redirect()->route('encuesta.index')->with('success', 'Los datos fueron actualizados correctamente.');

        } else {
            // Si la suma no es 100, redirigir de vuelta al formulario
            return redirect()->back()->withInput()->with('error', 'La suma de los valores debe ser 100. Por favor, inténtalo de nuevo.');
        }
    }
}
