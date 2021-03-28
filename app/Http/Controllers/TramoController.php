<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TramoController extends Controller
{
    public function store(Request $request)
    {
        
        $tramo = new Tramo();
        $tramo->nombre = $request->nombre;
        $tramo->descripcion = $request->descripcion;
        $tramo->id = $id->id;
        $tramo->id_ruta = $request->id_ruta;
        $tramo->save();
    
    }
}
