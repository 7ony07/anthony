<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    public function crear()
    {
        return view('formularioactivo');
    }
    public function guardar(Request $request){
        $request->validate([
            'nombre'  =>'required',
            'edad'    =>'required|integer|min:0',
            'correo'  =>'required',
            'telefono'=>'required|numeric|min:0',

        ]);

        
        $activo = new Activo();
        $activo->nombre = $request->input('nombre');
        $activo->edad = $request->input('edad');
        $activo->correo = $request->input('correo');
        $activo->telefono = $request->input('telefono');

        $activo->save();
        

        return view('guardaractivo');

    }
}
