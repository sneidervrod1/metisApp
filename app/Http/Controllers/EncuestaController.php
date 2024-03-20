<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Level;
use App\Models\Category;
class EncuestaController extends Controller
{
    public function index():View
    {
        $datos = Level::all();
        return view('encuestas.datos', compact('datos'));
    }
    public function pesosCategorias(Request $request){
        $id = $request->id;
        $dato = Level::find($id);
        return view('encuestas.formPesos', compact('dato'));
    }
    public function pesosCategoriasActualizar(Request $request){
        $a = array();

        for ($i=0; $i < count($request->all()) ; $i++) { 
            $a[$i] = intval($request->$i);
            
        }
        array_shift($a);
        $total = array_sum($a);
        if ($total == 100) {
            return redirect()->back()->with(['status'=>'Datos actualizados!','status_type'=>'success']);
        }else{
            return redirect()->back()->with(['status'=>'La suma de los pesos no es 100','status_type'=>'failed']);

        }
       
    }
    
}
